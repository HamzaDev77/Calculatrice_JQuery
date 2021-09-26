//---------------------------------JQUERY SCRIPT----------------------//
$(document).ready(function()
{
    $('.lorem,.quad_arth').hide(function ()
        {
            $(".i").addClass("fa-plus");
        });
    $(".a").click(function ()
        {
            $('.lorem').toggle();
            $(".a>.i").toggleClass("fa-minus");
            $(".lorem").prop('hidden',false);
            $('.quad_arth').hide();
            $(".b>.i").removeClass("fa-minus");
        });
    $(".b").click(function ()
        {
            $('.quad_arth').toggle();
            $(".b>.i").toggleClass("fa-minus");
            $(".quad_arth").prop('hidden',false);
            $('.lorem').hide();
            $(".a>.i").removeClass("fa-minus");
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
                c =a+" + "+b+" = "+add(a,b).toFixed(3);
                res.text(c).css("color",'#cd7f32');
            });
            $('#min').click(function(){
                c= a+" - "+b+" = "+soustr(a,b).toFixed(3);
                res.text(c).css("color",'#cd7f32');;
            });
            $('#mul').click(function(){
                c= a+" x "+b+" = "+mult(a,b).toFixed(3);
                res.text(c).css("color",'#cd7f32');;
            });
            $('#div').click(function(){
                c= a+" / "+b+" = "+divi(a,b).toFixed(3);
                res.text(c).css("color",'#cd7f32');;
            });
            $('#mod').click(function(){
                c= a+" % "+b+" = "+modu(a,b).toFixed(3);
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
        $("#sve_1").click(function(){
            quadratic();
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
//--------------------------------- Quadratic function--------------------//
//            programme de résolution de la fonction quadratique
                
    quadratic = () =>
            { 
                $ = (id) => document.getElementById(id);    
                f =  $("x").value;
                g =  $("y").value;
                h =  $("z").value;
                let delta = g * g - 4 * f * h;
            if (delta > 0) 
            {
            var s1 = (-g + Math.sqrt(delta)) / (2 * f);
            var s2 = (-g - Math.sqrt(delta)) / (2 * f);
            // resultat
            $("resultat").innerHTML = s1.toFixed(2) +' et '+ s2.toFixed(2);
            $("delta").innerHTML = delta;
                }

            else if (delta == 0) 
            {
                s1 = s2 = -g / (2 * f);
                $("resultat").innerHTML = s1.toFixed(2) ;
                $("delta").innerHTML = delta;
            }

            else {
                var r = (-g / (2 * f)).toFixed(2);
                var i = (Math.sqrt(-delta) / (2 * f)).toFixed(2);
                // resultat
                $("resultat").innerHTML = `les racines de cette equation sont : ${r} + ${i}i et ${r} - ${i}i`;
                $("delta").innerHTML = delta;
            }

            $("a").innerHTML = f;
            $("b").innerHTML = g;
            $("c").innerHTML = h;
            }

    refresh = () => location.reload();