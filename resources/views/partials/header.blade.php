<header>
            <div class="container-header">
                <div class="logo-header">
                    <img src="{{asset('img/dc-logo.png')}}" alt="">
                </div>

                <div class="menu-header">
                    <ul class="ul-header">
                        <li>character</li>
                        <li>comics</li>
                        <li>movies</li>
                        <li>tv</li>
                        <li>games</li>
                        <li>collectibles</li>
                        <li>videos</li>
                        <li>fans</li>   
                        <li>news</li>
                        <li>shop</li>                           
                    </ul>
                </div>
            </div>
</header>


<style>

    .ul-header li {
        display: inline-block;
        margin: 0px 10px;
        font-weight: bold;
        font-size: 20px;
    }

    header{
        height: 150px;
    }

    .container-header{
        width: 70%;
        margin: 0 auto;
        display: flex;
        align-items: center;
    }
    .container-header::after{
        display: table;
        clear: both;
        content: '';
    }

    .logo-header{
        float: left;
        width: 10%;        
    }

    .menu-header{
        float: right;
        width: 90%;        
        height: 100%;
        text-align: center;
    }

    .ul-header li.active, .ul-header li:hover{
        color: blue;
        border-bottom: 3px solid blue;
    }


    .logo-header img{
        width: 100px;
        height: 100px;
    }
</style>