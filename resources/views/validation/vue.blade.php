<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    <title>Form Validation with Vue.js</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Vue.js Form Validation</div>


                    <div class="panel-body" id="app">
                            <form method="POST" action="/vuejs/form" class="form-horizontal" @submit.prevent="onSubmit" >
                            {{ csrf_field() }}
                                <div :class="['form-group', allerros.name ? 'has-error' : '']" >
                                    <label for="name" class="col-sm-4 control-label">Name</label>
                                    <div class="col-sm-6">
                                        <input id="name" name="name" value=""  autofocus="autofocus" class="form-control" type="text" v-model="form.name">
                                        <span v-if="allerros.name" :class="['label label-danger']">@{{ allerros.name[0] }}</span>
                                    </div>
                                </div>
                                <div :class="['form-group', allerros.comments ? 'has-error' : '']" >
                                    <label for="comments" class="col-sm-4 control-label">Message</label>
                                        <div class="col-sm-6">
                                            <input id="comments" name="comments"  class="form-control" type="comments" v-model="form.comments">
                                            <span v-if="allerros.comments" :class="['label label-danger']">@{{ allerros.comments[0] }}</span>
                                        </div>
                                    </div>
                                    <span v-if="success" :class="['label label-success']">Record submitted successfully!</span>
                                    <button type="submit" class="btn btn-primary">
                                        Send
                                    </button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const app = new Vue({
        el: '#app',


        data: {
            form: {
                name : '',
                comments : '',
            },
            allerros: [],
            success : false,
        },
        methods : {
            onSubmit() {


                dataform = new FormData();
                dataform.append('name', this.form.name);
                dataform.append('comments', this.form.comments);
                console.log(this.form.name);


                axios.post('/vuejs/form', dataform).then( response => {
                    console.log(response);
                    this.allerros = [];
                    this.form.name = '';
                    this.form.comments = '';
                    this.success = true;
                } ).catch((error) => {
                         this.allerros = error.response.data.errors;
                         this.success = false;
                    });
            }
        }
    });
    </script>
</body>
</html>
