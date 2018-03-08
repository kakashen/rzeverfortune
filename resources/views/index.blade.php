@extends('layouts.header')
<!--top-header-->
<div id="home" class="top-header">
    <div class="container">
        <div class="logo">
            <h1><a href="{{url('/')}}">Emplox</a></h1>
        </div>
        <div class="top-menu">
            <span class="menu"><img src="images/nav-icon.png" alt=""/></span>
            <ul>
                <li><a class="scroll" href="#home">Home</a></li>
                <li><a class="scroll" href="#about">About</a></li>
                <li><a class="scroll" href="#service">Service</a></li>
                <li><a class="scroll" href="#gallery">Gallery</a></li>
                <li><a class="scroll" href="#blog">Blog</a></li>
                <li><a class="scroll" href="#contact">Contact</a></li>
            </ul>

        </div>
    </div>
</div>
<!--header-->
<div class="header">
    <div class="container">
        <div class="banner-info">
            <h2>Etiam rhoncus diam eget nibh porttitor gravida.</h2>
            <p>Praesent a tortor ipsum. In ornare nibh urna, non hendrerit leo lacinia non. Proin malesuada blandit ex,
                vitae placerat purus placerat non. Pellentesque habitant morbi tristique senectus et netus et malesuada
                fames ac turpis egestas.</p>
            <a href="#">Click</a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--Service-->
<div id="service" class="service">
    <div class="container">
        <h3>Services</h3>
        <div class="service-grids">
            <div class="icon-grids">
                <div class="col-md-6 futr-grid futr1">
                    <div class="icon-pic">
                        <div class="icon text-center">
                            <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="icon-info">
                        <h4><a href="#">Vestibulum sagittis</a></h4>
                        <p>Aliquam erat volutpat. Nam egestas dapibus pellentesque. Nunc non luctus neque, non aliquet
                            tortor. Suspendisse in faucibus dolor, commodo malesuada ipsum. Cras vel facilisis mi. In
                            malesuada felis eu volutpat consequat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 futr-grid">
                    <div class="icon-pic">
                        <div class="icon text-center">
                            <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="icon-info">
                        <h4><a href="#">Vestibulum sagittis</a></h4>
                        <p>Aliquam erat volutpat. Nam egestas dapibus pellentesque. Nunc non luctus neque, non aliquet
                            tortor. Suspendisse in faucibus dolor, commodo malesuada ipsum. Cras vel facilisis mi. In
                            malesuada felis eu volutpat consequat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="icon-grids grids2">
                <div class="col-md-6 futr-grid futr1">
                    <div class="icon-pic">
                        <div class="icon text-center">
                            <span class="glyphicon glyphicon-picture" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="icon-info">
                        <h4><a href="#">Vestibulum sagittis</a></h4>
                        <p>Aliquam erat volutpat. Nam egestas dapibus pellentesque. Nunc non luctus neque, non aliquet
                            tortor. Suspendisse in faucibus dolor, commodo malesuada ipsum. Cras vel facilisis mi. In
                            malesuada felis eu volutpat consequat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-6 futr-grid">
                    <div class="icon-pic">
                        <div class="icon text-center">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        </div>
                    </div>
                    <div class="icon-info">
                        <h4><a href="#">Vestibulum sagittis</a></h4>
                        <p>Aliquam erat volutpat. Nam egestas dapibus pellentesque. Nunc non luctus neque, non aliquet
                            tortor. Suspendisse in faucibus dolor, commodo malesuada ipsum. Cras vel facilisis mi. In
                            malesuada felis eu volutpat consequat.</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<!--about-->
<div id="about" class="about">
    <div class="about-left"></div>
    <div class="about-right">
        <h3>About Us</h3>
        <h4>Vivamus ac mi ut tortor elementum venenatis.</h4>
        <p>Mauris vestibulum pulvinar urna id ultricies. Etiam volutpat interdum mi in aliquet. Pellentesque vel
            tincidunt sapien.
            Suspendisse potenti. Nam sed scelerisque est. Vestibulum non leo ligula. Donec aliquet viverra semper. Donec
            sed est ac sem suscipit vehicula.
            Mauris nec nunc enim. Etiam aliquet risus et nunc rhoncus facilisis. Maecenas nec blandit ex. Nam nec dolor
            in nisl elementum malesuada.
            Fusce vitae eleifend magna. Curabitur tincidunt tincidunt vulputate.Etiam mollis nibh risus, a faucibus arcu
            ultricies eu. Morbi
            consectetur, metus vel efficitur luctus, nisi nulla vestibulum arcu, at rhoncus ligula ligula non nisl. Cras
            porttitor vestibulum nulla.</p>
    </div>
    <div class="clearfix"></div>
</div>
<!--gallery -->
<!--light-box-files -->

<!--gallery js-->
<div id="gallery" class="gallery">
    <div class="container">
        <h3>Gallery</h3>
        <div class="gallery-info">
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img15.jpg">
                    <img src="images/img15.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img10.jpg">
                    <img src="images/img10.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img11.jpg">
                    <img src="images/img11.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img12.jpg">
                    <img src="images/img12.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img13.jpg">
                    <img src="images/img13.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img14.jpg">
                    <img src="images/img14.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img9.jpg">
                    <img src="images/img9.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img16.jpg">
                    <img src="images/img16.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="col-md-4 galry-grids moments-bottom">
                <a class="b-link-stripe b-animate-go" href="images/img17.jpg">
                    <img src="images/img17.jpg" class="img-responsive" alt="">
                    <div class="b-wrapper">
							<span class="b-animate b-from-left    b-delay03 ">
								<img class="img-responsive" src="images/e.png" alt=""/>
							</span>
                    </div>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---->
<div id="blog" class="blog">
    <div class="container">
        <h3>Blog</h3>
        <div class="blog-grids">
            <div class="col-md-6 blog-grid">
                <a href="#"><img src="images/b1.jpg" class="img-responsive" alt=""/></a>
                <h4><a href="#">Etiam luctus velit ac cursus lobortis.</a></h4>
                <span>Mar 12 | 2015</span>
                <p>Aenean eget eleifend nulla. Nunc vel nisi mi. Ut faucibus ornare tempus. Donec non mi et sem
                    convallis tincidunt ac in purus. Nullam tincidunt orci elit, vitae vulputate sapien ullamcorper et.
                    Sed ut est purus. Duis consectetur suscipit ullamcorper. Nam dictum nisl odio, eget maximus ante
                    interdum iaculis urna sapien.</p>
            </div>
            <div class="col-md-6 blog-grid">
                <a href="#"><img src="images/b2.jpg" class="img-responsive" alt=""/> </a>
                <h4><a href="#">Etiam luctus velit ac cursus lobortis.</a></h4>
                <span>Mar 12 | 2015</span>
                <p>Aenean eget eleifend nulla. Nunc vel nisi mi. Ut faucibus ornare tempus. Donec non mi et sem
                    convallis tincidunt ac in purus. Nullam tincidunt orci elit, vitae vulputate sapien ullamcorper et.
                    Sed ut est purus. Duis consectetur suscipit ullamcorper. Nam dictum nisl odio, eget maximus ante
                    interdum iaculis urna sapien.</p>
            </div>
            <div class="clearfix"></div>
            <div class="middleblog-grid blog-grid">
                <a href="#"><img src="images/b3.jpg" class="img-responsive" alt=""/> </a>
                <h4><a href="#">Etiam luctus velit ac cursus lobortis.</a></h4>
                <span>Mar 12 | 2015</span>
                <p>Aenean eget eleifend nulla. Nunc vel nisi mi. Ut faucibus ornare tempus. Donec non mi et sem
                    convallis tincidunt ac in purus. Nullam tincidunt orci elit, vitae vulputate sapien ullamcorper et.
                    Sed ut est purus. Duis consectetur suscipit ullamcorper. Nam dictum nisl odio, eget maximus ante
                    interdum iaculis urna sapien.</p>

            </div>
        </div>
    </div>
</div>
<!---->
<!---->
<div id="contact" class="contact">
    <div class="container">
        <h3>Contact</h3>
        <div class="touch-top">
            <div class="col-md-8 touch-left">
                <form>
                    <input type="text" value="Name" onFocus="this.value = '';"
                           onBlur="if (this.value == '') {this.value = 'Name';}"/>
                    <input type="text" value="Email" onFocus="this.value = '';"
                           onBlur="if (this.value == '') {this.value = 'Email';}"/>
                    <textarea onFocus="this.value = '';"
                              onBlur="if (this.value == '') {this.value = 'Message';}"></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="col-md-4 touch-right">
                <div class="touch-right-top">
                    <span class="add"> </span>
                    <h4>123 MAIN STREET,<label>CITY, COUNTRY</label></h4>
                </div>
                <div class="touch-right-top">
                    <span class="mail"> </span>
                    <p><a href="mailto:example@email.com">EMAIL@DOMAIN.COM</a></p>
                </div>
                <div class="touch-right-top">
                    <span class="num"> </span>
                    <p>+0123 456 789</p>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@extends('layouts.footer')
	