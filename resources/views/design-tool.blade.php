<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <title>Document</title>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <style>
        body {
            background-color: #fff;
        }
    </style>

</head>

<body>
    <div class="container mt-5" id="design-tool-id">
        <div id="app">
            <design-tool />
        </div>
    </div>
</body>

</html>

<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script> -->
<!-- <script>
    new Vue({
        el: '#design-tool-id',
        data: {
            rectangle13: false,
            rectangle153: false,
            oval13: false,
            rectangle123: false
        },
        mounted() {},
        created() {},
        methods: {
            activateReadMore() {}
        }
    })
</script> -->