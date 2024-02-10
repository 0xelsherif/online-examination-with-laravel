$("#c_datepicker_1").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minDate: "today",
    maxDate: new Date().getFullYear().toString() + "-12-31",
});
$("#c_datepicker_2").flatpickr({
    enableTime: true,
    dateFormat: "Y-m-d H:i",
    minDate: "today",
    maxDate: new Date().getFullYear().toString() + "-12-31",
});

// minutes
Inputmask({
    "mask": "9",
    "repeat": 3
}).mask("#c_inputmask_4");
