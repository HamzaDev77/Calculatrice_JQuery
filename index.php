
<html>
<head>
    <meta charset="utf-8">
    <title>JQUERY</title>
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="JQuery.js"></script>
    <style>
       .table-borderless> tr > td.border,.table-borderless > tr >th.border, .table-borderless{
           
            color : #333;
            font-size:20px;
           
        }
        .table-borderless > tbody > tr > td.border{
            cursor:pointer;
        }
        .table-borderless > tbody > tr > td.border:hover{
            background: linear-gradient(#bb6528, #b06500);
            cursor:pointer;
            color:white;
            font-size:28px;
        }
        
        .table-borderless >tr>td{
            border:none;
            text-align:center;
        }
        .form-control,.form-control:active,.form-control:focus{
            display: block;
            align-content:center;
            align-items:center;
            width: 100%;
            height: 40px;
            padding: 6px 12px;
            font-size: 20px;
            line-height: 1.42857143;
            color: #fff;
            background: linear-gradient(#bb6528, #cd7f32);
            border: none;
            border-radius: 4px;
        }
        .form-control::placeholder {
            color:ghostwhite;
        }
        .form-control:hover::placeholder{
            color:lightgray;
        }
        #ref,#sve{
            background: linear-gradient(#bb6528, #cd7f32);
            color:white;
        }
        #ref:hover,#sve:hover{
            background: linear-gradient(#cd7f32,#bb6528 );
            color:beige;
        }
    </style>
</head>
    <body class="container">
        <div class="jumbotron text-center">
           <i id="stat">
             CALCULETTA 
           </i> <a class="btn btn-default a"> <i class="i fa fa-plus"></i></a>
        </div>
        
        <div class="lorem text-center">
            <pre hidden>
                <table class="d-flex justify-content-center table table-borderless">
                    <tr>
                            <th class="border float-right">A</th>
                            <th class="border text-center col-lg-1 ">Operations</th>
                            <th class="border float-left">B</th>      
                    </tr>
                        <tr>
                        <td></td>
                        <td class="border col-lg-1 text-center" id="plus">+</td>
                    </tr>
                        <td></td>
                        <td class="border col-lg-1 text-center" id="min">-</td>
                    <tr>
                        <td class="float-right"><input class="form-control"  name="a" placeholder="enter a number" required></td>
                        <td class="border col-lg-1 text-center" id="mul">x</td>
                        <td><input class="form-control"  name="b" placeholder="enter a number" required></td>   
                    </tr>
                        <td></td>
                        <td class="border col-lg-1 text-center" id="div">/</td>
                
                    <tr>
                        <td></td>
                        <td class="border col-lg-1 text-center" id="mod">%</td>
                    </tr>
                    <tr>
                    <td></td>
                        <th class="col-lg-1 text-center">Result</th>    
                    </tr>
                    
                </table> 
            </pre> 
        </div>
        <div class="col-lg-12 text-center">
        <legend  id="res"></legend>    
        <button  id="ref" class="btn btn-default text-center">C</button>
        <button  id="sve" class="btn btn-default text-center">Save</button>
        </div>
        <!-- <div id="get">
        
        </div> -->
    </body>
</html>