
<div style="padding-top:70px;">
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat: 53.906828, lng: 27.55};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 11,
          center: uluru
        });
        var myposition = {lat: 53.858225, lng: 27.485178};
        var infoWindow = new google.maps.InfoWindow({
        	content: '<p> наш офис</p>'
        });
        addMarker(myposition);

        function addMarker(coordinate){
        	 var marker = new google.maps.Marker({
          position: coordinate,
          map: map
        });        
        	 marker.addListener('click', function(){
        	infoWindow.open(map,marker);
        })
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDg-iCj-YiqHYB1uyRQa7omH456rPAWBNE&callback=initMap">
    </script>
    <div class="col-md-12">       
<div class="art-bothside my-art-bothside">
    <div class="Up-sign-form text-center">
        <h2 style="padding-bottom: 20px;"> Свяжитесь с нами!</h2>
        
    </div>
    <div class="mid-cls">
        <div class="art-right-w3ls">
            <form  method="post" action="{{ route('contact')}}">{{ csrf_field() }}           
                <div class="main my-main">
                	<p style="padding-bottom: 20px;">Заполните поля ниже, что бы продолжить...</p>
                	  <div class="form-group">
                        <p>Имя</p>
                        <input type="text" class="width-input" id="name" name="name" placeholder="имя" value="{{old('name')}}" required>

							</div>  
                    <div class="form-group">
                        <p>E-mail</p>
                        <input type="email" class="width-input" name="email" id="email" placeholder="E-mail" value="{{old('email')}}" required>
                    </div>                 

							<div class="form-group">
                        <p>Ваше сообщение</p>
                        <textarea class="form-control my-form-control" id="text" name="text" rows="5" placeholder="your messege">{{old('text')}}</textarea>
							</div>

                    <div class="form-left-w3l">
                        <div class="btnn my-btnn">
                            <button type="submit">
                                Отправить
                            </button>                           
                        </div>
                    </div>
                </div>

            </form>
        </div>
             <div class="col-md-6 contact_right">
      <h2>Информация</h2><br>

      <ul class="address">
        <li>
          <p><a href="#">denis.tumel@mail.ru</a></p>
        </li>
        <div class="clearfix"> </div>
      </ul>
      <ul>
        <li>
          <p>+375(29) 258-24-39<br> +375(33) 653-24-19</p>
        </li>
        <div class="clearfix"> </div>
      </ul>
      <h2 class="m_5">Время работы</h2><br>
      <p>Понедельник-пятница : 9-22</p>
      <p>Суббота : 9-19</p>
      <p>Воскресение : Выходной!</p>
     </div>
    </div>
</div>
    </div>
 </div>
