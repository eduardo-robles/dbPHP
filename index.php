<?php
  include '_templates/sitewide.php';
	include $template['header'];
?>

          <section>
            <div id="col1">
						<h1>Employee Phones</h1>
						<article>
              <div id="queries">
              <h2>Please make selection from the side menu</h2>
              </div>

            <script type="text/javascript">
                function query1() {
                    $.get("controllers/query1.php", function(data) { $('#queries').replaceWith(data);});
                }

                function query2() {
                    $.get("controllers/query2.php", function(data) { $('#queries').replaceWith(data);});
                }

                function query3() {
                    $.get("controllers/query3.php", function(data) { $('#queries').replaceWith(data);});
                }

                function query4() {
                    $.get("controllers/query4.php", function(data) { $('#queries').replaceWith(data);});
                }

                function query5() {
                    $.get("controllers/query5.php", function(data) { $('#queries').replaceWith(data);});
                }
          </script>
          <h3>Menu Selection</h3>
          <ul>
          <li><a href="#" onclick="query1();">Get the Employee information and the total price of Calls </a></li>
          <li><a href="#" onclick="query2();">Get Employee information from Employees who have a P.O. address and name starts with an 'A'</a></li>
          <li><a href="#" onclick="query3();">Get the most expensive and least expensive calls and the total charge</a></li>
          <li><a href="#" onclick="query4();">Get the Total Employee Cost for each employee that is more than $2</a></li>
          <li><a href="#" onclick="query5();">Get employees that have made calls</a></li>
          </ul>
        		</article>
          </div><!-- End Main Col -->
					</section>
				<aside>
					<section>
						<h3>Menu Selection</h3>
						<ul>
						<li><a href="#" onclick="query1();">Get the Employee information and the total price of Calls </a></li>
						<li><a href="#" onclick="query2();">Get Employee information from Employees who have a P.O. address and name starts with an 'A'</a></li>
						<li><a href="#" onclick="query3();">Get the most expensive and least expensive calls and the total charge</a></li>
            <li><a href="#" onclick="query4();">Get the Total Employee Cost for each employee that is more than $2</a></li>
            <li><a href="#" onclick="query5();">Get employees that have made calls</a></li>
						</ul>
					</section>
				</aside>

<?php
include $template['footer'];
?>
