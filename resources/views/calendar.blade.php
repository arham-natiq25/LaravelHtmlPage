<!DOCTYPE html>
<html>
<head>
    <title>Calendar</title>
    <!-- Example script and link tags -->

</head>
<body>
    <div id="app">
        <full-calendar :events="events"></full-calendar>
    </div>
    <script>
        const app = new Vue({
            el: '#app',
            data: {
                events: [
                    // Your events data goes here
                ],
            },
        });
    </script>
</body>
</html>
