
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
        #ref,#sve,#ref_1,#sve_1{
            background: linear-gradient(#bb6528, #cd7f32);
            color:white;
        }
        #ref:hover,#sve:hover,#ref_1:hover,#sve_1:hover{
            background: linear-gradient(#cd7f32,#bb6528 );
            color:beige;
        }
        .quad_arth>.form-control, .quad_arth>.form-control:active, .quad_arth>.form-control:focus
        {
                width:auto;
                height:auto;
                background:#000;
        }
        p.lead{
            color:darkgreen;
            font-size : 20px;
            font-family : 'system-ui';
            margin-left : 33%;
        }
    </style>
</head>
    <body class="container">
        <div class="jumbotron text-center">
           <i id="stat">
             CALCULETTA 
           </i> <a class="btn btn-default a"> <i class="i fa fa-plus"></i></a>
           <i id="stat">
             QUADRATIC FUNCTION  
           </i><a class="btn btn-default b"> <i class="i fa fa-plus"></i></a>
        </div>
        
        <div hidden class="jumbotron jumbotron-fluid lorem text-center">
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
                <legend  id="res"></legend>  
                <div class="d-flex justify-content-center">
                <button  id="ref" class="col-lg-1 btn btn-default ">C</button>
                <button  id="sve" class="col-lg-1 btn btn-default ">Save</button>
                </div>
        </div>
       
        <!-- <div id="get">
        
        </div> -->
  
        <div hidden class="jumbotron jumbotron-fluid quad_arth">
           <div class="container">
               <div class="display-4 d-flex justify-content-center">
            <pre id="a">a</pre>X<h4>2</h4> + <pre id="b">b</pre>X + <pre id="c">c</pre> = 0
            </div>
            <br>
                <hr class="my-2">
               <p class="lead">où a, b et c sont des nombres réels et a ≠ 0</p><br>
              
                    <form class="form-inline" method="post">
                        <input   type="number"  class="form-control"  name="x" value="" id="x" placeholder="a" />
                            <div class="display-4 d-flex justify-content-center">
                            X<h4>2</h4>+ 
                            </div>
                        <input  type="number"  class="form-control" name="y" value="" id="y" placeholder="b"  />
                            <div class="display-4 d-flex justify-content-center">
                            X+
                            </div>
                        <input type="number" class="form-control" name="z" value="" id="z" placeholder="c" /> 
                        <div class="display-4 d-flex justify-content-center">
                            =0
                            </div>
                        <div class="mb-4 d-flex flex-column justify-content-center">
                            <legend id="resultat" > Result :  </legend>
                            <legend id="delta" > Delta =   </legend>
                            <br><br><br><div class="container float-right">
                            <input type="button" class="btn btn-default col-xs-1" id="sve_1"  value="Calculer" >
                            <input type="button" class="btn btn-default col-xs-1"  id="ref_1" onclick="refresh()" value="Actualiser" >
                        </div>
                            </div>
                       
                    </form>
           </div>
       </div>
      
    </body>
</html>