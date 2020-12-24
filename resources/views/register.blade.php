<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Create Product</title>
    <style>
        body {
            background-color: #2ecc71;
            font-family: source-sans-pro, sans-serif;
        }

        h1 {
            margin-left: auto;
            margin-top: 50px;
            text-align: center;
            font-weight: 100;
            font-size: 2.8em;
            color: #ffffff;
        }

        div {
            width: 500px;
            margin: auto;
        }

        .formStyle {
            background-color: #2ecc71;
            padding: 20px;
            width: 400px;
            margin-bottom: 20px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: #ecf0f1;
            border-top-style: none;
            border-right-style: none;
            border-left-style: none;
            font-size: 1em;
            font-weight: 100;
            color: #ffffff;
        }

        .formButton {
            float: right;
            background-color:#ffffff;
            display:inline-block;
            color:#2ecc71;
            font-size:28px;
            font-weight: 500;
            padding:6px 24px;
            margin-top: 15px;
            margin-right: 60px;
            text-decoration:none;
        }

        .formButton:hover {
            background-color: #27ae60;
            color:#ffffff;
        }

        .formButton:active {
            position:relative;
            top:3px;
        }

        /*To remove the outline that appears on clicking the input textbox*/
        input:focus {
            outline: none;
        }

        /* To format the placeholder text color */
        ::-webkit-input-placeholder {
            color: #ecf0f1;
        }

        :-moz-placeholder { /* Firefox 18- */
            color: #ecf0f1;
        }

        ::-moz-placeholder {  /* Firefox 19+ */
            color: #ecf0f1;
        }

        :-ms-input-placeholder {
            color: #ecf0f1;
        }
    </style>
</head>
<body>
<h1>Register</h1>
<div>
    <form method="post" action="/create">
        @csrf

        <input type="text" name="username" class="formStyle" placeholder="Username"/>
        @error('username')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="name" class="formStyle" placeholder="Full name"/>
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="email" name="email" class="formStyle" placeholder="Email"/>
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="password" name="password" class="formStyle" placeholder="Password"/>
        @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="password" name="confirmed" class="formStyle" placeholder="Confirm Password"/>
        @error('confirmed')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="mobile" class="formStyle" placeholder="Mobile"/>
        @error('mobile')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit" name="submit" class="formButton">Submit</button>
    </form>
</div>
</body>
</html>
