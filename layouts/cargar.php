<!Doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device=width, initial=scale=1, shrink-to-fit=no">
        <meta name="author" content="Karen's Cakes">
        <meta name="description" content="Loader - templune">
        
        
    </head>
    <style>
        :root{
            --dark:#000000;
            --light:  #f7accf;
        }
    
        html,body{
            background-color:var(--dark);
            height:100%;
            min-height:100%;
            margin:0;
            
        }
        section{
            height:100%;
            display:flex;
        }
        .loader-animation{
            display:flex;
            justify-content:center;
            align-self:center;
            margin:0 auto;
        }
        .loader-animation > div{
            width:1.5rem;
            height:1.5rem;
            margin:3rem .5rem;
            border-radius:50%;
            background-color:var(--light);
            animation: loader-animation .6s infinite alternate;
        }
        @keyframes loader-animation{
            to{
                opacity:.1;
                transform:translate3d(0,-1rem,0);
                
            }
        }
        .loader-animation > div:nth-child(3){
            animation-delay:.4s;
        }
    </style>
    <body> <div class="preloader flex-column justify-content-center align-items-center">
        <section>
           
            <div class="loader-animation">
                <div></div>
                <div></div>
                <div></div>
               
            </div>
           
        </section> </div>
    </body>
    
</html>

