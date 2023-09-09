<template>
    <div ref="calendar"></div>
  </template>

  <script>
  import fullCalendar from "fullcalendar";
  import "fullcalendar/dist/fullcalendar.css";

  export default {
    props: {
      events: {
        type: Array,
        required: true,
      },
    },
    mounted() {
      this.initFullCalendar();
    },
    methods: {
      initFullCalendar() {
        const calendarEl = this.$refs.calendar;
        const calendar = new fullCalendar.Calendar(calendarEl, {
          plugins: ["dayGrid"],
          defaultView: "dayGridMonth",
          events: this.events,
        });
        calendar.render();
      },
    },
  };
  </script>
