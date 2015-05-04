<?php
  include '_templates/sitewide.php';
	include $template['header'];
?>

	<div class="main-container">
            <div class="main wrapper clearfix">
                <article>
                    <header>
                        <h1>Employee Phones</h1>
                        <p>The information you requested.</p>
                    </header><!--header-->
                    <section id="content">
						  
						  <div id="queries">
								<ul class="current">
								  <li><a href="controllers/query1.php">Option 1: Get the employee information and the total price of the calls</a></li>
								  <li><a href="controllers/query2.php">Option 2: Get Employee information from employees who have a P.O. address and name starts with an 'A'</a></li>
								  <li><a href="controllers/query3.php">Option 3: Get the most expensive and least expensive calls and the total charge</a></li>
								  <li><a href="controllers/query4.php">Option 4: Get the Total Employee Cost for each employee that is more than $2</a></li>
								  <li><a href="controllers/query5.php">Option 5: Get employees that have made calls</a></li>
								  </ul>
							</div>
					</section><!--content-->
                </article>
            </div> <!-- #main -->
        </div> <!-- #main-container -->

<?php
include $template['footer'];
?>
