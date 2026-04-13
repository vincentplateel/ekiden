<# 

With the "snippet" statement we can define a snippet that can be used and overriden in templates.
Note that defining the snippet will not generate any output. A snippet has to be invoked by its 
name in order the actually render it like "<@ footer @>".

This is very useful in order to be able to inherit a template and just override a part of it.

#>
<@~ snippet footer ~@>
 
	<footer class="footer background-black">
     <div class="footer-widgets">
            <div class="themeflat-container">
                <div class="row footer-top">
                    <div class="col-xxl-4 col-lg-4 col-xl-4 col-md-12 logo-footer">
                        <div class="widget">
                            <div class="textwidget">
                                <a href="/"><img  src="/shared/logo-ekiden.png" width="75px" alt="images"></a>
                                <a href="https://omathletisme.com"><img  src="/shared/logo-om-athletisme.png" width="75px" alt="images"></a>
                                @{ +footer | replace ('/\\s*(.+)\\s*/is', '<section>$1</section>') }
                               
                               
                            </div>
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                    <div class="col-xxl-4 col-lg-4 col-xl-4 col-md-6 link-footer">
                        <div class="widget widget_menu-footer">
                            <h5 class="widget-title">Liens utiles</h5>
                            <ul class="menu-footer">
                              	<# Keep this comment: @{ checkboxShowPageInFooter} #>
                                <@~ newPagelist { 
                                  excludeHidden: false, 
                                  match: '{ "checkboxShowPageInFooter": "/./" }' 
                                } ~@>
                                <@ if @{ :pagelistCount} @>
                                  <li>
                                    <@ foreach in pagelist ~@>
                                      <a href="@{ url }">@{ title }</a>
                                    <@~ end @>
                              </li>
                                <@ end @>
                            </ul><!-- /.menu -->
                        </div><!-- /.widget -->
                      
                    </div><!-- /.col-md-4 -->

                    <div class="col-xxl-4 col-lg-4 col-xl-4 col-md-6 new-letter">
                        <div class="widget widget_text widget_menu-footer">
                            <h5 class="widget-title">Suivez-nous</h5>
                            
                                 <div class="social-icon-footer">
                                    <a href="ttps://www.instagram.com/ekiden_de_marseille/"><i class="icon-instagram"></i></a>
                                    <a href="https://www.facebook.com/ekidenMarseille"><i class="icon-facebook"></i></a>
                                </div>
                  
                        </div><!-- /.widget -->
                    </div><!-- /.col-md-4 -->

                </div><!-- /.row -->
                <div class="row footer-bottom">
                    <div class="col-md-6 col-sm-12">
                        <div class="copyright">
                            <p><a href="index.html" target="_blank">Ekiden de Marseille</a> © 2026 
                            </p>
                        </div>
                    </div><!-- /.col-md-6 -->
                    
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.footer-widgets -->
		
	
	</footer>
<@~ end ~@>

<# 

We can now render the actual snippet as follows:

#>
<@ footer @>
