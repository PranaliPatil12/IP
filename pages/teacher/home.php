<?php
    include '../../includes/teacherlogin.php';
    include '../../includes/createquiz.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Quiz Zone (Teacher page)</title>
    <!-- <link rel="stylesheet" type="text/css" href="../styles/teacherHome.css"> -->
    <style>
        body{
            color:#fff;
            font-style: Arial;    
            margin: 1px;  
         }
         #content{
            display:grid;
            grid-template-columns: repeat(3,1fr);
            grid-template-rows: repeat(11,minmax(30px,auto))
            margin:0 auto;
            grid-row-gap: 10px;
            grid-column-gap: 8px;

         }
         #content header{
            padding:5px;
            background-color: #720245;
            grid-column: 1 / 4;
         }
         #content section{
            padding:30px;
            background-color: #720245;
            grid-column: 1 / 3;
            grid-row:2/7;
            display: flex;
            justify-content: space-around;
         }
         #content aside{
            padding:30px;
            background-color: #eee9;
            grid-column:  3/ 5;
            grid-row: 2/ 11;
         }
         #content div{
            padding:10px;
            background-color: #eee9;
            grid-column: 1/3;
            grid-row: 7/ 11;
            height: 100%;
         }  
         label{
            float:left;
            font-size: 20px;
            font-weight: bold;
         }
         header > button {
            float:right;
            background-color: #eeee;
            border: none;
            color: white;
            padding: 8px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            border-radius: 20px;
            border: 2px solid #fff; 
            width:180px;
           margin:10px;
         }
        button:hover {
            background-color: #eee; /* Green */
            color: white;
        }
        button:active { 
            background-color: #eee;
        }
         section > select ,section > input {
            padding: 2px 10px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            border-radius: 20px;
            border: 2px solid #fff; 
            width:190px;
            background-color: #eee;
            margin-right:15px;
         }
         section>h4{
             margin:20px;
         }
         #rndbtn{
			-webkit-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			-moz-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			-ms-animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			animation:zoom-in-out 5s ease-in-out 0s infinite normal;
			}

		@-webkit-keyframes zoom-in-out {
			0%{ -webkit-transform: scale(1); transform: scale(1.5); }
			50%{ -webkit-transform: scale(1.08); transform: scale(1.08); }
			100%{ -webkit-transform: scale(1); transform: scale(1.5); }
			}

		@keyframes zoom-in-out {
			0%{ -ms-transform: scale(1); transform: scale(1.5); }
			50%{ -ms-transform: scale(1.08); transform: scale(1.08); }
			100%{ -ms-transform: scale(1); transform: scale(1.5); }
        }
    </style>
</head>

<body>
    <div id="content">
        <header > 
            <label>Name:  <?php echo $_SESSION['Name']?></label>
            <button >Change Password</button>
            <button>Logout</button>
        </header>
        <section>
            <h4>Class:</h4><br>
            <select id="classname" name="class" label="hello">
                <option value="class">Class</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
            <h4>Subject:</h4><br>
            <br><select id="subject" name="subject">
                <option value="subject">Subject</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
            </select>
            <h4>Time: </h4>
            <input id="time" type="time" name="usr_time">
            <h4>Date: </h4>
            <input id="date" type="date" name="bday">
        </section>
        <aside>
                <input type="button" name="Sub1" value="History1" style="width:100% ; size: 30px;padding:20px;background-color:#720245;color:white;margin: 5px;" /> 
                <input type="button" name="Sub2" value="History2" style="width:100% ;size: 30px;padding:20px;background-color:#720245;color:white; margin: 5px;" />
                <input type="button" name="Sub3" value="History3" style="width:100%;size: 30x;padding:20px;background-color: #720245;color:white;margin: 5px;" />
                <input type="button" name="Sub4" value="History4" style="width:100% ;size: 30pxs;padding:20px;background-color: #720245;color:white;margin: 5px;" />
        </aside>
        <div>
            <label style="color:#720245;">Title:..........................</label> 
           
            <label style="color:#720245;float:right">Sub Title:......................</label> <br><br>
            
            <input type="button" name="startqz" value="START QUIZ"id="rndbtn" style="width:18% ;height:39%;background-color:#720245;color:white;margin-left:300px;margin-top:200px;border-radius: 50%;font-size: 16px;border:0px;"/>
        </div>
        <div style="grid-row:auto;"></div>
    </div>
</body>

</html>