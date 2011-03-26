<!DOCTYPE html>
<html lang="en">
    <head>
        <title>jQuery 1.5 examples: Example 4</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <style type="text/css" media="all">
    
        </style>
        <!-- Include required JS files -->
        <script type="text/javascript" src="shCore.js"></script>
         
        <!--
            At least one brush, here we choose JS. You need to include a brush for every
            language you want to highlight
        -->
        <script type="text/javascript" src="shBrushJScript.js"></script>
         
        <!-- Include *at least* the core style and default theme -->
        <link href="shCore.css" rel="stylesheet" type="text/css" />
        <link href="shThemeDefault.css" rel="stylesheet" type="text/css" />
        <style type="text/css" media="all">
        .up-left-Corner{ position:absolute; height: 50px; width: 50px; border-left: 1px solid; border-top: 1px solid; border-color: #000; }
        #longRoad{position:absolute; height: 50px; width: 600px; border-bottom: 1px solid; border-top: 1px solid; border-color: #000; }
        .up-right-Corner{ position:absolute; height: 50px; width: 50px; border-right: 1px solid; border-top: 1px solid; border-color: #000; }
        .up-down-shortRoad{position:absolute; height: 150px; width: 50px; border-right: 1px solid; border-left: 1px solid; border-color: #000; }
        .down-right-Corner{ position:absolute; height: 50px; width: 50px; border-right: 1px solid; border-bottom: 1px solid; border-color: #000; }
        .left-right-shortRoad{ position:absolute; height: 50px; width: 150px; border-top: 1px solid; border-bottom: 1px solid; border-color: #000; }
        .down-left-Corner{ position:absolute; height: 50px; width: 50px; border-left: 1px solid; border-bottom: 1px solid; border-color: #000; }
        .up-down-longRoad{position:absolute; height: 250px; width: 50px; border-right: 1px solid; border-left: 1px solid; border-color: #000; }
        .left-right-longRoad{position:absolute; height: 50px; width: 349px; border-top: 1px solid; border-bottom: 1px solid; border-color: #000;}
        .mini-road{position:absolute; height: 50px; width: 49px; border-left: 1px solid; border-right: 1px solid; border-color: #000;}
        </style>
    </head>
    <body>
        <h1>Example 4: The Brunillo's animation</h1><br>
        <p class="classname">Run Brunillo run!</p>
        <a href="index.php"> << BACK </a><br>
        <br>
        <div style="height: 500px;width: 800px; position: relative">
            <input type="button" value="Start" id="startBtn" />
            
            <div class="up-left-Corner" style="left: 5px; top: 40px;"></div>
            <div id="longRoad" style="left: 55px; top: 40px;"></div>
            <div class="up-right-Corner" style="left: 655px; top: 40px;"></div>
            <div class="up-down-shortRoad" style="left: 654px; top: 91px;"></div>
            <div class="down-right-Corner" style="left: 655px; top: 241px;"></div>
            <div class="left-right-shortRoad" style="left: 505px; top: 240px;"></div>
            <div class="up-left-Corner" style="left: 454px; top: 240px;"></div>
            <div class="up-down-shortRoad" style="left: 454px; top: 291px;"></div>
            <div class="down-right-Corner" style="left: 455px; top: 441px;"></div>
            <div class="down-left-Corner"  style="left: 403px; top: 441px;"></div>
            <div class="up-down-longRoad" style="left: 403px; top: 191px;"></div>
            <div class="up-right-Corner" style="left: 404px; top: 140px;"></div>
            <div class="left-right-longRoad" style="left: 55px; top: 140px;"></div>
            <div class="down-left-Corner"  style="left: 5px; top: 141px;"></div>
            <div class="mini-road"  style="left: 5px; top: 91px;"></div>
            
            <div id="box" style="height: 30px;width:30px;position: absolute; left:16px;top:50px;background:black; background: transparent url(runner.jpg) no-repeat;"></div>     
        </div>
        <pre class="brush: js">
            step = 1;
            map = [];
            map[0] = {top: "-=100"};
            map[1] = {left: "+=650"};
            map[2] = {top: "+=200"};
            map[3] = {left: "-=203"};
            map[4] = {top: "+=200"};
            map[5] = {left: "-=50"};
            map[6] = {top: "-=300"};
            map[7] = {left: "-=397"};
            
            $(document).ready(function(){
                SyntaxHighlighter.all()
                console.log(map);
                $("#startBtn").click(function(){
                    $.when(next_step(step)).then(function(){
                        $("#startBtn").hide().click();
                        
                    });
                }); 
                         
            });
            
            function next_step(next){
                var def = new $.Deferred();
                props = map[next];
                $("#box").animate(props, 1500,"linear", def.resolve());
                step = (step + 1)%8;
                
                return def.promise();
                
            }
        </pre>
        
        
        <script type="text/javascript">
            step = 1;
            map = [];
            map[0] = {top: "-=100"};
            map[1] = {left: "+=650"};
            map[2] = {top: "+=200"};
            map[3] = {left: "-=203"};
            map[4] = {top: "+=200"};
            map[5] = {left: "-=50"};
            map[6] = {top: "-=300"};
            map[7] = {left: "-=397"};
            
            $(document).ready(function(){
                SyntaxHighlighter.all()
                console.log(map);
                $("#startBtn").click(function(){
                    $.when(next_step(step)).then(function(){
                        $("#startBtn").hide().click();
                        
                    });
                }); 
                         
            });
            
            function next_step(next){
                var def = new $.Deferred();
                props = map[next];
                $("#box").animate(props, 1500,"linear", def.resolve());
                step = (step + 1)%8;
                
                return def.promise();
                
            }
            
            
        </script>
    </body>
</html>