<!--<div id="map">-->
<!---->
<!--</div>-->
<!---->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!--<script src="http://google-maps-utility-library-v3.googlecode.com/svn/trunk/maplabel/src/maplabel.js"></script>-->
<!---->
<!--<script>-->
<!--    function initMap() {-->
<!--        var uluru = {lat: 34.101244, lng: -118.343684};-->
<!--        var map = new google.maps.Map(document.getElementById('map'), {-->
<!--            zoom: 16,-->
<!--            center: uluru-->
<!--        });-->
<!--        var marker = new google.maps.Marker({-->
<!--            position: uluru,-->
<!--            map: map,-->
<!--            icon: {-->
<!--                labelOrigin: new google.maps.Point(25,60),-->
<!--                url: 'public/images/default_marker.png'-->
<!--            },-->
<!--            label: {-->
<!--                text: "7060 Hollywood  Boulevard",-->
<!--                color: '#EE453B',-->
<!--                fontWeight: 'bold',-->
<!--            },-->
<!---->
<!--        });-->
<!--        google.maps.event.addListener(marker, 'click', function() {-->
<!--            infowindow.open(map,marker);-->
<!--        });-->
<!--    }-->
<!--</script>-->
<!--<script async defer-->
<!--        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBl3yxoR0i9-1sOnCNyKspU9zDOMh7rRkw&language=en&region=EN&callback=initMap">-->
<!--</script>-->
<!---->
<!---->
<!--<!-- jquery form plugin-->
<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>-->
<!--<script src="http://malsup.github.com/jquery.form.js"></script>-->
<!---->
<!--<form id="msform" method="POST" action="" enctype="multipart/form-data">-->
<!--    <label for="msform">To participate in the conference, please fill out the form</label>-->
<!--    --><?php //echo  "<p></p><a href='/members'>"."All members (".$allMembers.")"."</a></p>"?>
<!--    <label for=""></label>-->
<!--    <fieldset id="first">-->
<!--        <input id="firstname" name="firstname" type="text" value="" placeholder="firstname" required />-->
<!--        <input id="lastname " name="lastname" type="text" value="" placeholder="lastname" required />-->
<!--        <input id="birthdate " name="birthdate" type="date"  value="" placeholder="birthdate"  required/>-->
<!--        <select  name="country">-->
<!--            <option>USA</option>-->
<!--            <option>UK</option>-->
<!--        </select>-->
<!--        <input id="phone" name="phone" type="text" value="" placeholder="phone" required />-->
<!--        <input id="email" name="email" type="email" value="" placeholder="email"   />-->
<!--        <input id="report_subject" name="report_subject" type="text" value="" placeholder="report_subject" />-->
<!--        <input type="button" name="next" class="next action-button" value="Next"/>-->
<!--    </fieldset>-->
<!--    <fieldset id="second">-->
<!--        <input id="company" name="company" type="text" value="" placeholder="company" />-->
<!--        <input id="position" name="position" type="text" value="" placeholder="position" />-->
<!--        <input id="about me" name="about me" type="text" value="" placeholder="about me" />-->
<!--        <input type="file" name="file_upload"   id="file"/>-->
<!--        <input type="button" name="previous" class="previous action-button-previous" value="Previous"/>-->
<!--        <input type="submit" id="sbmt" value="Submit"  class="submit action-button"  />-->
<!---->
<!--    </fieldset>-->
<!--</form>-->
<!---->
<!---->
<!--<!--``````````-->
<!--<script>-->
<!--    // wait for the DOM to be loaded-->
<!--    $(document).ready(function() {-->
<!--        // bind 'msform' and provide a simple callback function-->
<!--        $('#msform').ajaxForm(function() {-->
<!--            alert("Thank you!");-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!---->
<!---->

<!---->
<!--<script type="text/javascript">-->
<!--    // Variable to hold request-->
<!--    var request;-->
<!---->
<!--    // Bind to the submit event of our form-->
<!--    $("#foo").submit(function(event){-->
<!---->
<!--        // Prevent default posting of form - put here to work in case of errors-->
<!--        event.preventDefault();-->
<!---->
<!--        // Abort any pending request-->
<!--        if (request) {-->
<!--            request.abort();-->
<!--        }-->
<!--        // setup some local variables-->
<!--        var $form = $(this);-->
<!---->
<!--        // Let's select and cache all the fields-->
<!--        var $inputs = $form.find("input, select, button, textarea");-->
<!---->
<!---->
<!--        // Serialize the data in the form-->
<!--        var serializedData = $form.serialize();-->
<!---->
<!--        // Let's disable the inputs for the duration of the Ajax request.-->
<!--        // Note: we disable elements AFTER the form data has been serialized.-->
<!--        // Disabled form elements will not be serialized.-->
<!--        $inputs.prop("disabled", true);-->
<!---->
<!--        // Fire off the request to /form.php-->
<!--        request = $.ajax({-->
<!--            url: "form.php",-->
<!--            type: "post",-->
<!--            data: serializedData-->
<!--        });-->
<!---->
<!--        // Callback handler that will be called on success-->
<!--        request.done(function (response, textStatus, jqXHR){-->
<!--            // Log a message to the console-->
<!--        });-->
<!---->
<!--        // Callback handler that will be called on failure-->
<!--        request.fail(function (jqXHR, textStatus, errorThrown){-->
<!--            // Log the error to the console-->
<!--            console.error(-->
<!--                "The following error occurred: "+-->
<!--                textStatus, errorThrown-->
<!--            );-->
<!--        });-->
<!---->
<!--        // Callback handler that will be called regardless-->
<!--        // if the request failed or succeeded-->
<!--        request.always(function () {-->
<!--            // Reenable the inputs-->
<!--            $inputs.prop("disabled", false);-->
<!--        });-->
<!---->
<!--    });-->
<!--</script>-->










<!--To participate in the conference, please fill out the form-->

<!--<form >-->
<!--    <input type="text" placeholder="firstname">-->
<!--    <input type="text" placeholder="lastname">-->
<!--    <input type="text" placeholder="report subject">-->
<!--    <input type="text" placeholder="country">-->
<!--    <input type="text" placeholder="phone">-->
<!--    <input type="text" placeholder="email">-->
<!--    <button type="submit">next</button>-->
<!--</form>-->
<!--<form>-->
<!--    <input type="text" placeholder="company">-->
<!--    <input type="text" placeholder="position">-->
<!--    <input type="text" placeholder="about me">-->
<!--    <input type="file" placeholder="photo">-->
<!--    <button type="submit">next</button>-->
<!--</form>-->






<!--<script type="text/javascript">-->
<!--    $(document).ready(function(){-->
<!--        $("button").click(function(){-->
<!---->
<!--            $.ajax({-->
<!--                type: 'POST',-->
<!--                data: {-->
<!--                    name: 'myname',-->
<!--                    action: 'register.php'-->
<!--                },-->
<!--                url: '',-->
<!--                success: function(data) {-->
<!--                    alert(data);-->
<!--                    $("p").text(data);-->
<!---->
<!--                }-->
<!--            });-->
<!--        });-->
<!--    });-->
<!--</script>-->








<!--~~~~~~~~~~~~~~~~~ social ~~~~~~~~~~-->



<!--<a href="https://twitter.com/share?ref_src=twsrc%5Etfw"   class="twitter-share-button" data-text=' --><?php //echo @$twMessage ?><!--' data-url='--><?php //echo @$twUrl ?><!--' data-lang="en" data-show-count="false">-->
<!--    <img src="public/images/default.jpg"  alt="lorem" >'-->
<!--</a>-->
<!--<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>-->
<!---->
<!--<script src="https://apis.google.com/js/platform.js" async defer></script>-->
<!--<g:plus action="share"></g:plus>-->
<!---->
<!--<div id="fb-root"></div>-->
<!--<script>(function(d, s, id) {-->
<!--        var js, fjs = d.getElementsByTagName(s)[0];-->
<!--        if (d.getElementById(id)) return;-->
<!--        js = d.createElement(s); js.id = id;-->
<!--        js.src = 'https://connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v3.0';-->
<!--        fjs.parentNode.insertBefore(js, fjs);-->
<!--    }(document, 'script', 'facebook-jssdk'));</script>-->
<!---->
<!--<div class="fb-share-button" data-href="http://ololo.com" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fololo%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Поделиться</a></div>-->

<!--~~~~~~~~~~~~~~-->
<!-- FB JS SDK?-->
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId            : '903666189812289',
            autoLogAppEvents : true,
            xfbml            : true,
            version          : 'v3.0'
        });
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!--~~~~~~~~~~~~~~~~~-->
<div>
    <ul class="rrssb-buttons">
        <li class="rrssb-facebook">
            <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header:
                  https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
            <a href="https://www.facebook.com/sharer/sharer.php?u=http://rrssb.ml" class="facebook-share-button popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg>
          </span>
                <span class="rrssb-text">facebook</span>
            </a>
        </li>

        <li class="rrssb-twitter">
            <!-- Replace href with your Meta and URL information  -->
            <a href="https://twitter.com/share?ref_src=twsrc%5Etfw"   class="twitter-share-button popup"  data-text=' --><?php echo @$twMessage ?><!--' data-url='--><?php echo @$twUrl ?><!--' data-lang="en" data-show-count="false">

                          <span class="rrssb-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg>
                          </span>
                <span class="rrssb-text">twitter</span>
            </a>
        </li>

        <li class="rrssb-googleplus">
                            <!-- Replace href with your meta and URL information.  -->
            <a href="https://plus.google.com/share?url=http://rrssb.ml" class="popup">
          <span class="rrssb-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
                <span class="rrssb-text">google+</span>
            </a>
        </li>

    </ul>
    <!-- Buttons end here -->

</div>

<script>
    window.jQuery || document.write('<script src="js/vendor/jquery.1.10.2.min.js"><\/script>')
</script>

<script>
    $('.facebook-share-button').click(function() {
        FB.ui({
                method: 'feed',
                link: "http://ololo.com",
                // picture: 'The picture url',
                name: "The name who will be displayed on the post",
                description: "The description who will be displayed"
            }, function(response){
                console.log(response);
            }
        );
    });
</script>