//---------------------------------JQUERY SCRIPT----------------------//
$(document).ready(function()
{
    $('.lorem').hide(function ()
        {
            $(".i").addClass("fa-plus");
        });
    $(".a").click(function ()
        {
            
            $('.lorem').toggle();
            
            $(".i").toggleClass("fa-minus");
            $("pre").prop('hidden',false);
        });
            
    $('.lorem').click(function(){
        $("input").toggleClass("fa-minus");
           });
           $('#ref').trigger("click");
    $('input[name=a],input[name=b]').keyup(function(){
            var a=parseFloat($('input[name="a"]').val());
            var b=parseFloat($('input[name="b"]').val());
            var c;
            c = a + b;
            var res=$('#res');
            res.text(a+"  OP  "+b);
            $('#plus').click(function(){
                c =a+" + "+b+" = "+add(a,b);
                res.text(c).css("color",'#cd7f32');
            });
            $('#min').click(function(){
                c= a+" - "+b+" = "+soustr(a,b);
                res.text(c).css("color",'#cd7f32');;
            });
            $('#mul').click(function(){
                c= a+" x "+b+" = "+mult(a,b);
                res.text(c).css("color",'#cd7f32');;
            });
            $('#div').click(function(){
                c= a+" / "+b+" = "+divi(a,b);
                res.text(c).css("color",'#cd7f32');;
            });
            $('#mod').click(function(){
                c= a+" % "+b+" = "+modu(a,b);
                res.text(c).css("color",'#cd7f32');;
            }); 
            // $('#sve').click(function()
            //     {
            //         $("#get").load("operation.txt");
            //         $.ajax({
            //             method: "POST",
            //             url: "operation.txt",
            //             data: { a1: a, 
            //                 op1: " OP " ,                      //----------in version 2.0----------//
            //                 b1: b, 
            //                 res1: res+"\n" 
            //                     }
            //         }).done(function(data) {
            //             //data.serialize();
            //             alert( "Data Saved:"+data);
            //             });
            //     });
            $('#ref').click(function(){
                $(':input')
                .not(':button, :submit, :reset, :hidden')
                .val('')
                .removeAttr('checked')
                .removeAttr('selected');
                c=a=b=0;
                res.text('');
            });
           
        });
   
});
//---------------------------------                  ----------------------//
//---------------------------------CALCULATING FUNCTS----------------------//
function add(a,b) {
    return a+b;
    }
function soustr(a,b){
    return a-b;
    }
function mult(a,b){
    return a*b;
    }
function divi(a,b){
    if(b==0) return "Undefined";
    else return a/b;
    }
function modu(a,b){
    if(b==0) return "Undefined";
    return a%b;
    }
//---------------------------------                 ----------------------//