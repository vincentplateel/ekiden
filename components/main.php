<# 

Same as with other components, we first define a snippet that can be overriden 
and then invoke it a second step by using its name as statement.

#>
<@~ snippet main ~@>

 <main class="">
		<# 
   
		Now we include the "content" component.

		#>
		<@ content.php @>
    <section class="main-content blog-content-single">
        <div class="themeflat-container">
            <div class="row">
                @{ +main }   
            </div><!-- /.row -->

        </div><!-- /.container -->
    </section>
   
	</main>
<@~ end ~@>

<@ main @>
