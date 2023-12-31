const pikaDateRange = (wire) => ({
    init() {
        let wireModelEnd = this.$refs.end.getAttribute("wire:model");
        let wireModelStart = this.$refs.start.getAttribute("wire:model");

        let end_date = new Pikaday({
            ...{
                field: this.$refs.end,
                onSelect: function () {
                    wire.set(wireModelEnd, end_date.toString(), true);
                },
            },
            ...PikadaySharedCollection(),
        });

        let start_date = new Pikaday({
            ...{
                field: this.$refs.start,
                onSelect: function () {
                    end_date.config({
                        minDate: window
                            .moment(this.getDate())
                            .add(1, "days")
                            .toDate(),
                    });
                    wire.set(wireModelStart, start_date.toString(), true);
                },
            },
            ...PikadaySharedCollection(),
        });

        start_date.config({ minDate: window.moment().toDate() });
    },
});

function PikadaySharedCollection() {
    return {
        toString(date) {
            return window.moment(date).format("ddd MMM D YYYY");
        },
    };
}

export default pikaDateRange;
