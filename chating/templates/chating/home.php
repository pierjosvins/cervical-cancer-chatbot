<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cervical cancer Q&A</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        box-sizing: border-box;
    }
    body {
        background: #efefef;
    }
    .cursor {
        cursor: pointer;
    }
    .confrontation-scrollbar {
        position: relative;
        max-height: 300px;
        overflow: auto;
    }


    /*===========================
        CHAT BOOT MESSENGER
    ===========================*/
    #Smallchat .Messages, #Smallchat .Messages_list {
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
    }
    .chat_close_icon {
    cursor:pointer;
        color: #fff;
        font-size:16px;
        position: absolute;
        right: 12px;
        z-index: 9;
    }
    .chat_on {
        position: fixed;
        z-index: 10;
        width: 60px;
        height: 60px;
        right: 15px;
        bottom:20px;
        background-color: #8a57cf;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        padding: 9px;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
        cursor: pointer;
        display: block;
    }
    .chat_on_icon{
        color:#fff;
        font-size:25px;
        text-align:center;
    }
    
    #Smallchat .Layout { 
    pointer-events:auto;
    box-sizing:content-box!important;
    z-index:999999999;
    position:fixed;
    bottom:20px;
    min-width:50px;
    max-width:400px;
    max-height:30px;
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex;
    -webkit-box-orient:vertical;
    -webkit-box-direction:normal;
    -webkit-flex-direction:column;
    -ms-flex-direction:column;
    flex-direction:column;
    -webkit-box-pack:end;
    -webkit-justify-content:flex-end;
    -ms-flex-pack:end;
    justify-content:flex-end;
    border-radius:50px;
    box-shadow:5px 0 20px 5px rgba(0,0,0,.1);
    -webkit-animation:appear .15s cubic-bezier(.25,.25,.5,1.1);
    animation:appear .15s cubic-bezier(.25,.25,.5,1.1);
    -webkit-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
    opacity:0;
    -webkit-transition:right .1s cubic-bezier(.25,.25,.5,1),bottom .1s cubic-bezier(.25,.25,.5,1),min-width .2s cubic-bezier(.25,.25,.5,1),max-width .2s cubic-bezier(.25,.25,.5,1),min-height .2s cubic-bezier(.25,.25,.5,1),max-height .2s cubic-bezier(.25,.25,.5,1),border-radius 50ms cubic-bezier(.25,.25,.5,1) .15s,background-color 50ms cubic-bezier(.25,.25,.5,1) .15s,color 50ms cubic-bezier(.25,.25,.5,1) .15s;
    transition:right .1s cubic-bezier(.25,.25,.5,1),bottom .1s cubic-bezier(.25,.25,.5,1),min-width .2s cubic-bezier(.25,.25,.5,1),max-width .2s cubic-bezier(.25,.25,.5,1),min-height .2s cubic-bezier(.25,.25,.5,1),max-height .2s cubic-bezier(.25,.25,.5,1),border-radius 50ms cubic-bezier(.25,.25,.5,1) .15s,background-color 50ms cubic-bezier(.25,.25,.5,1) .15s,color 50ms cubic-bezier(.25,.25,.5,1) .15s
        
    }

    #Smallchat .Layout-right {
        right:20px
    }

    #Smallchat .Layout-open {
    overflow:hidden;
    min-width:300px;
    max-width:400px;
    height:500px;
    max-height:500px;
    border-radius:10px;
    color:#fff;
    -webkit-transition:right .1s cubic-bezier(.25,.25,.5,1),bottom .1s cubic-bezier(.25,.25,.5,1.1),min-width .2s cubic-bezier(.25,.25,.5,1.1),max-width .2s cubic-bezier(.25,.25,.5,1.1),max-height .2s cubic-bezier(.25,.25,.5,1.1),min-height .2s cubic-bezier(.25,.25,.5,1.1),border-radius 0ms cubic-bezier(.25,.25,.5,1.1),background-color 0ms cubic-bezier(.25,.25,.5,1.1),color 0ms cubic-bezier(.25,.25,.5,1.1);
    transition:right .1s cubic-bezier(.25,.25,.5,1),bottom .1s cubic-bezier(.25,.25,.5,1.1),min-width .2s cubic-bezier(.25,.25,.5,1.1),max-width .2s cubic-bezier(.25,.25,.5,1.1),max-height .2s cubic-bezier(.25,.25,.5,1.1),min-height .2s cubic-bezier(.25,.25,.5,1.1),border-radius 0ms cubic-bezier(.25,.25,.5,1.1),background-color 0ms cubic-bezier(.25,.25,.5,1.1),color 0ms cubic-bezier(.25,.25,.5,1.1);
    }

    #Smallchat .Layout-expand {
        height:500px;
        min-height:500px;
        display:block;
    }
    #Smallchat .Layout-mobile {
        bottom:10px
    }
    #Smallchat .Layout-mobile.Layout-open {
        width:calc(100% - 20px);
        min-width:calc(100% - 20px)
    }
    #Smallchat .Layout-mobile.Layout-expand {
        bottom:0;
        height:100%;
        min-height:100%;
        width:100%;
        min-width:100%;
        border-radius:0!important;
    }
    @-webkit-keyframes appear {
    0% {
    opacity:0;
    -webkit-transform:scale(0);
    transform:scale(0)
    }
    to {
    opacity:1;
    -webkit-transform:scale(1);
    transform:scale(1)
    }
    }
    @keyframes appear {
    0% {
    opacity:0;
    -webkit-transform:scale(0);
    transform:scale(0)
    }
    to {
    opacity:1;
    -webkit-transform:scale(1);
    transform:scale(1)
    }
    }
    #Smallchat .Messenger_messenger {
    position:relative;
    height:100%;
    width:100%;
    min-width:300px;
    -webkit-box-orient:vertical;
    -webkit-box-direction:normal;
    -webkit-flex-direction:column;
    -ms-flex-direction:column;
    flex-direction:column
    }
    #Smallchat .Messenger_header,#Smallchat .Messenger_messenger {
    display:-webkit-box;
    display:-webkit-flex;
    display:-ms-flexbox;
    display:flex
    }
    #Smallchat .Messenger_header {
    -webkit-box-align:center;
    -webkit-align-items:center;
    -ms-flex-align:center;
    align-items:center;
    padding-left:10px;
    padding-right:40px;
    height:40px;
    -webkit-flex-shrink:0;
    -ms-flex-negative:0;
    flex-shrink:0
    }


    #Smallchat .Messenger_header h4 {
    opacity:0;
    font-size:16px;
    -webkit-animation:slidein .15s .3s;
    animation:slidein .15s .3s;
    -webkit-animation-fill-mode:forwards;
    animation-fill-mode:forwards
    }

    #Smallchat .Messenger_prompt {
    margin:0;
    font-size:16px;
    line-height:18px;
    font-weight:400;
    overflow:hidden;
    white-space:nowrap;
    text-overflow:ellipsis
    }

    @-webkit-keyframes slidein {
    0% {
    opacity:0;
    -webkit-transform:translateX(10px);
    transform:translateX(10px)
    }
    to {
    opacity:1;
    -webkit-transform:translateX(0);
    transform:translateX(0)
    }
    }
    @keyframes slidein {
    0% {
    opacity:0;
    -webkit-transform:translateX(10px);
    transform:translateX(10px)
    }
    to {
    opacity:1;
    -webkit-transform:translateX(0);
    transform:translateX(0)
    }
    }
    #Smallchat .Messenger_content {
        height: 450px;
        -webkit-box-flex: 1;
        -webkit-flex-grow: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        background-color: #fff;
    }
    #Smallchat .Messages {
        position: relative;
        -webkit-flex-shrink: 1;
        -ms-flex-negative: 1;
        flex-shrink: 1;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -webkit-flex-direction: column;
        -ms-flex-direction: column;
        flex-direction: column;
        overflow-x: hidden;
        overflow-y: auto;
        padding: 10px;
        background-color: #fff;
        -webkit-overflow-scrolling: touch;
    }

    #Smallchat .Input {
        position: relative;
        width: 100%;
        -webkit-box-flex: 0;
        -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
        flex-grow: 0;
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0;
        padding-top: 17px;
        padding-bottom: 15px;
        color: #96aab4;
        background-color: #fff;
        border-top: 1px solid #e6ebea;
    }
    #Smallchat .Input-blank .Input_field {
        max-height: 20px;
    }
    #Smallchat .Input_field {
        width: 100%;
        resize: none;
        border: none;
        outline: none;
        padding: 0;
            padding-right: 0px;
            padding-left: 0px;
        padding-left: 20px;
        padding-right: 75px;
        background-color: transparent;
        font-size: 16px;
        line-height: 20px;
        min-height: 20px !important;
    }
    #Smallchat .Input_button-emoji {
        right: 45px;
    }
    #Smallchat .Input_button {
        position: absolute;
        bottom: 15px;
        width: 25px;
        height: 25px;
        padding: 0;
        border: none;
        outline: none;
        background-color: transparent;
        cursor: pointer;
    }
    #Smallchat .Input_button-send {
        right: 15px;
    }
    #Smallchat .Input-emoji .Input_button-emoji .Icon, #Smallchat .Input_button:hover .Icon {
        -webkit-transform: scale(1.1);
        -ms-transform: scale(1.1);
        transform: scale(1.1);
        -webkit-transition: all .1s ease-in-out;
        transition: all .1s ease-in-out;
    }
    #Smallchat .Input-emoji .Input_button-emoji .Icon path, #Smallchat .Input_button:hover .Icon path {
        fill: #2c2c46;
    }
    .sent_msg p {
    background: #05728f none repeat scroll 0 0;
    border-radius: 3px;
    font-size: 14px;
    margin: 0; color:#fff;
    padding: 5px 10px 5px 12px;
    width:100%;
    }
    .outgoing_msg{ overflow:hidden; margin:26px 0 26px;}
    .sent_msg {
        float: right;
        max-width:92%;
    }
    .received_msg {
        display: inline-block;
        padding: 0 0 0 10px;
        vertical-align: top;
        max-width: 92%;
    }
    .received_withd_msg p {
    background: #ebebeb none repeat scroll 0 0;
    border-radius: 3px;
    color: #646464;
    font-size: 14px;
    margin: 0;
    padding: 5px 10px 5px 12px;
    width: 100%;
    }
</style>
<body>
    <div class="container">
        <nav class="mb-4 navbar navbar-light bg-info justify-content-center">
            <a class="navbar-brand text-center text-white" href="{% url 'home' %}"><h3>Cervical Cancer Q&A</h3></a>
        </nav>
        <div class="card">
            <div class="card-header text-center">
                <h4>Cervical Cancer Prevention & Awareness</h4>
            </div>
            <div class="card-body align-middle">
                <div>
                    <p><b>Welcome</b> to our website! Here you can ask any question related only to Cervical Cancer. Do not hesite to call your doctor for more information if you have similar symptoms or do not feel great.</p>
                    <P>Note that this website was developed/built by <a href="https://pierjos-colere-website.web.app" target="_blank">Pierjos COLERE</a>.</P>
                    <h5><b>Why Cervical Cancer ?</b></h5>
                </div>
                <div>
                    <ul class="p-2">
                        <li class="m-2">Cervical cancer is a cancer that's found anywhere in the cervix.</li>
                        <li class="m-2">The cervix is the opening between the vagina and the womb (uterus).</li>
                        <li class="m-2">It is part of the reproductive system and is sometimes called the neck of the womb.</li>
                    </ul>
                </div>
                <p>When detected at an early stage, the 5-year survival rate for people with invasive cervical cancer is 92%. About 44% of people with cervical cancer are diagnosed at an early stage. If cervical cancer has spread to surrounding tissues or organs and/or the regional lymph nodes, the 5-year survival rate is 58%.</p>
                <div class="text-center">
                    <img class="col" style="max-width: 200px;" src="https://assets.nhs.uk/nhsuk-cms/images/VID365_0219_Cervix.width-1534.jpg" alt="Cervical Cancer Description">
                </div>
                <div class="mt-3">
                    <p>Visit Cancer website for more information :</p>
                    <a href="https://www.cancer.net/cancer-types/cervical-cancer" target="_blank">
                        <img style="width: 200px;" src="https://www.cancer.net/sites/cancer.net/themes/cancernet2/images/ASCO-CancerNet-Tag-RGB2020.svg" />
                    </a>
                </div>
            </div>
            
        </div>
        
        <div class="row">
	        <div id="Smallchat">
                <div class="Layout Layout-open Layout-expand Layout-right" style="background-color: #3F51B5;color: rgb(255, 255, 255);opacity: 5;border-radius: 10px;">
                    <div class="Messenger_messenger">
                        <div class="Messenger_header bg-info" style="background-color: rgb(22, 46, 98); color: rgb(255, 255, 255);">
                            <h4 class="Messenger_prompt">How can we help you?</h4> <span class="chat_close_icon"><i class="fa fa-window-close" aria-hidden="true"></i></span> </div>
                            <div class="Messenger_content">
                                <div class="Messages" id="Messages">
                                    <div class="Messages_list" id="Messages_list">
                                        <div class="received_msg">
                                            <div class="received_withd_msg">
                                                <p>Hello ! Ask me any information about Cervical Cancer, I will try to answer.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Input Input-blank">
                                    <form autocomplete="off" id="form">{% csrf_token %}
                                        <input class="Input_field" id="text" type="text" placeholder="Type here..." style="height: 20px;" />
                                        <input type="submit" style="display: none;" id="submit" tabindex="-1" />
                                        <button class="Input_button Input_button-send">
                                            <div class="Icon" style="width: 18px; height: 18px;">
                                                <svg width="57px" height="54px" viewBox="1496 193 57 54" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="width: 18px; height: 18px;">
                                                    <g id="Group-9-Copy-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(1523.000000, 220.000000) rotate(-270.000000) translate(-1523.000000, -220.000000) translate(1499.000000, 193.000000)">
                                                        <path d="M5.42994667,44.5306122 L16.5955554,44.5306122 L21.049938,20.423658 C21.6518463,17.1661523 26.3121212,17.1441362 26.9447801,20.3958097 L31.6405465,44.5306122 L42.5313185,44.5306122 L23.9806326,7.0871633 L5.42994667,44.5306122 Z M22.0420732,48.0757124 C21.779222,49.4982538 20.5386331,50.5306122 19.0920112,50.5306122 L1.59009899,50.5306122 C-1.20169244,50.5306122 -2.87079654,47.7697069 -1.64625638,45.2980459 L20.8461928,-0.101616237 C22.1967178,-2.8275701 25.7710778,-2.81438868 27.1150723,-0.101616237 L49.6075215,45.2980459 C50.8414042,47.7885641 49.1422456,50.5306122 46.3613062,50.5306122 L29.1679835,50.5306122 C27.7320366,50.5306122 26.4974445,49.5130766 26.2232033,48.1035608 L24.0760553,37.0678766 L22.0420732,48.0757124 Z" id="sendicon" fill="#96AAB4" fill-rule="nonzero"></path>
                                                    </g>
                                                </svg>
                                            </div>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--===============CHAT ON BUTTON STRART===============-->
                    <div class="chat_on bg-info"> <span class="chat_on_icon"><i class="fa fa-comments" aria-hidden="true"></i></span> </div>
                    <!--===============CHAT ON BUTTON END===============-->
                </div>
	        </div>

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        $(document).ready(function(){
            $(".chat_on").click(function(){
                $(".Layout").toggle();
                $(".chat_on").hide(300);
            });
            
            $(".chat_close_icon").click(function(){
                $(".Layout").hide();
                $(".chat_on").show(300);
            });
        });

        $(document).ready(function() {
            $(document).on('submit', '#form', function() {
                var textValue = document.getElementById('text').value;
                textValue = textValue.toString();
                textValue = textValue.replace( /(<([^>]+)>)/ig, '');

                var messages_list = document.getElementById("Messages_list");
                
                if(textValue.length > 1){

                    let div_sent = document.createElement('div');
                    div_sent.className = 'sent_msg'
                    div_sent.innerHTML = "<p>"+textValue+"</p>"

                    let div_outgoing = document.createElement('div');
                    div_outgoing.className = "outgoing_msg"
                    div_outgoing.appendChild(div_sent)
                    messages_list.append(div_outgoing)
                    document.getElementById('text').value = "";
                    
                    /* Scroll to Bottom */
                    var messages = document.getElementById("Messages");
                    messages.scrollTop = messages.scrollHeight;
                    
                    $.ajax({  
                        url: "ask/",
                        data: {
                            'question': textValue 
                        },

                        success: function (data) {
                            messages_list.innerHTML += data
                            messages.scrollTop = messages.scrollHeight;
                        }
                    });
                    
                    
                    

                    
                }
                
                return false;
            });
        });
    </script>
</body>
</html>