
    <div class="jumbotron">
       <img src="{{asset('/img/jumbotron.jpg')}}" alt="">
       <button class="button-jumbotron">CURRENT SERIES</button>
    </div>
 

 
 <style>
 
  .jumbotron{
      height: 500px;
      width: 100%;
  }
  .jumbotron img{
     object-position: top;
     object-fit: cover;
     width: 100%;
     height: 100%;
     position: relative;
  }
  .button-jumbotron{
      font-size: 20px;
      background-color:  rgb(2, 130, 249);
      color: white;
      padding: 10px 32px;
      position: absolute;
      left: 15%;
      top: 65%;
      border: 1px solid rgb(48, 48, 48);
  }
 </style>