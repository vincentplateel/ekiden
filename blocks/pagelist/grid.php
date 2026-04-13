<# 

This snippet file is responsible to render any given pagelist into a grid of previews
consisting of the first found image inside the main content area and the page's title.

#>



<@ if @{ :pagelistCount } @>
  <section class="main-content blog-posts">
        <div class="themeflat-container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12 widget-blog-content">
                    <div class="post-wrap">
                        <@ foreach in pagelist @>
                          <# 
                      
                          The ":img" variable is used in order to store the file path of the first found
                          image in the "+main" field.

                          Note that the leading colon ":" is used to mark a variable as an internal runtime
                          variable that is not exposed to the user interface in the dashboard.

                          #>
                          <@ set { :img: @{ +main | findFirstImage | def(false) } } @>
                         
                          <article class="entry format-standard wow fadeInUp animated animated" style="visibility: visible; animation-name: fadeInUp;">
                           

                            <div class="main-post">
                               
                                <h2 class="entry-title"><a href="@{ url }">@{ title }</a>
                                </h2>
                                <div class="entry-meta">
                                  <p>@{ +main | findFirstParagraph | 180 }</p>
                                </div>
                                <a class="more-link" href="@{ url }">En savoir plus</a>
                                <!-- /.entry-meta -->
                            </div><!-- /.main-post -->
                        </article>
                        <@ end @>
                 
    
                    </div>
                </div><!-- /.col-md-9 -->
             
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
<@ end @>
