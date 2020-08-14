<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <div id="app">
			<menu-list :items="['one', 'two', 'three']">
                <template slot="menu-item" scope="props">
                    <h2 v-text="props.item"></h2>
                </template>
            </menu-list>
        </div>
		<script src="/js/app.js"></script>
    </body>
</html>
