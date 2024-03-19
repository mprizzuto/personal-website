<?php 
//get the current file .. i.e index.php
$currentFile = basename($_SERVER["SCRIPT_NAME"]);
// $queryString = $_GET["page"] ?? null;

function getQueryString() {
	$queryString = $_GET["page"] ?? null;
	return $queryString;
}

// a better var_dump
function formatVar(mixed $input) {
	echo "<pre>";
	var_dump($input);
	echo "</pre>";
}

function sanitizeString(string $str) {
	$result = htmlspecialchars($str);
	$result = strip_tags($str);

	return $result;
}

//get any page with ?page query string
function getPage() {
	$page = $_GET["page"] ?? null;
	return $page;
}

//this should probably be an array of pages . loop over using foreach, if current index === $slug, apply

function styleAnchorLink($slug) {
	// TODO. abstract out $navLinkStyle rule into its own function.
	$queryString = $_GET["page"] ?? null;
	$navLinkStyle = " style = 'border-bottom: 2px solid maroon; padding-bottom: 2px'";
	switch ($slug === getQueryString()) {

		case null || "home":
		  return $navLinkStyle;
			break;

		case "projects":
			return $navLinkStyle;
			break;

		case "about":
			return $navLinkStyle;
			break;

		case "writing":
			return $navLinkStyle;
			break;

		case "goals":
			return $navLinkStyle;
			break;

		case "resume":
			return $navLinkStyle;
			break;

		case "contact":
			return $navLinkStyle;
			break;	

		case "experiments":
			return $navLinkStyle;
			break;

		case "site-map":
			return $navLinkStyle;
			break;	
	}
}

//get any page with ?writing query string
function getWritingPage() {
	$page = $_GET["writing"] ?? null;
	return $page;
}

// a function that is used in the control flow for the 404 page
function checkPages(mixed $page) {
	// compare $pages against a list of known strings

	$pageList = ["home","projects","project-detail","about","writing","style-guide","contact","experiments","experiment-detail","blog-post-detail", "", "case-study", "resume", "site-map"];

	// return "true" if page exists, otherwise return "false"
	return in_array($page, $pageList) ? "true" : "false";
}
?>

<?php function cardBuilder($name, $goal, $link) {?>
<card class="project-card">
	<details>
		<summary><?=$name?></summary>
		<p><?=$goal?></p>
    <a class="project-link" href="<?=$link?>"><?=$name?></a>
	</details> 
</card>
<?php } ?>

<?php function projectDetailBuilder(string $name, string $skills, string $image, string $alt, string $description, string $url ):void { ?>
	<section class="project-detail">
		<inner-column>
			<detail-card>
				<h2><?=$name?></h2>

				<p><?=$skills?></p>

				<picture>
					<img src="<?=$image?>" alt="<?=$alt?>">
				</picture>

				<p><?=$description?></p>

				<a href="<?=$url?>">see the project</a>
			</detail-card>
		</inner-column>
	</section>
<?php } ?>

<?php function experimentDetailBuilder(string $name, string $hypothesis, string $materials, string $image, string $alt, string $result):void { ?>
	<section class="experiment-detail">
		<inner-column>
			<detail-card>

				<h2><?=$name?></h2>

				<p><?=$hypothesis?></p>

				<p><?=$materials?></p>

				<picture>
					<img src="<?=$image?>" alt="<?=$alt?>">
				</picture>

				<p><?=$result?></p>
			</detail-card>
		</inner-column>
	</section>
	
<?php } ?>

<?php 
function generateMeta($title, $description, $image) {?>
<title><?=$title?></title>
    <meta name="description" content="<?=$description?>">

    <meta property="og:image" content="<?=$image?>">
<?php }?>

<?php 
	//generate the meta for the pages based on the query string returned by the getHead() function
	//TODO. update paths to meta images
  function getHead() {
  	switch (getPage()) {
  		case "home":
  		case null:
  			generateMeta("home", "My name is Marco Rizzuto. I bring a neurodiverse approach to Web Development and User Experience. I am excited to take part in the current web revolution to build highly performant and accessible websites.", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/home.jpg");
  			break;	

  		// case null:
  		// 	generateMeta("home", "My name is Marco Rizzuto. I bring a neurodiverse approach to Web Development and User Experience. I am excited to take part in the current web revolution to build highly performant and accessible websites.", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/home.jpg");
  		// 	break;

  		case "projects":
  			generateMeta("projects", "come see my projects", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/projects.jpg");
  			break;

  			case "about":
	  			generateMeta("about", "come read about the man behind the code", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/about.jpg");
	  			break;

	  		case "sitemap":
	  			generateMeta("sitemap", "the sitemap", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/sitemap.jpg");
	  			break;	

  			case "writing":
	  			generateMeta("writing", "like reading? you'll love my blog posts", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/writing.jpg");
	  			break;

	  		case "blog-post-detail":
	  			generateMeta("blog post detail", "get the detail!", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/writing-page-detail.jpg");
	  			break;	

	  		case "case-study":
	  			generateMeta("project case study", "read the case study!", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/writing-page-detail.jpg");
	  			break;		

	  		// case "portfolio":
	  		// 	generateMeta("portfolio", "check out my portfolio", "htps://peprojects.dev/alpha-1/mprizzuto/personal-website-v2");
	  		// 	break;

	  			case "resume":
		  			generateMeta("resume", "check out my resume", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/resume.jpg");
		  			break;

		  		case "goals":
	  				generateMeta("goals", "check out my goals", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/goals.jpg");
	  				break;

	  			case "contact":
	  				generateMeta("contact", "contact me", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/contact.jpg");
	  				break;

	  			case "experiments":
	  				generateMeta("experiments", "my experiments", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/experiments.jpg");
	  				break;

	  			case "experiment-detail":
	  				generateMeta("experiment detail", "my experiment detail", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/experiment-detail.jpg");
	  				break;

	  			case "project":
	  				generateMeta("project detail ", "my project detail", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/project-detail.jpg");
	  				break;

	  			case "blog-post-detail":
	  				generateMeta("blog post detail", "my blog post detail", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/blog-post-detail.jpg");
	  				break;

	  			case "site-map":
	  				generateMeta("site-map", "all the site links!", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/site-map.jpg");
	  				break;

	  			case "style-guide":
	  				generateMeta("style-guide", "site style guide", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/style-guide.jpg");
	  				break;

	  			default:
	  				generateMeta("404", "page not found", "https://peprojects.dev/alpha-1/mprizzuto/images/metadata/404.jpg");
  	}
  }
?>

<?php 
// generates skill list for homepage
function generateSkills(array $skills) {
	foreach ($skills as $key => $value) 
		echo "<li>" . "<span class='language'>$key</span> " . $value . "</li>";
	}
?>


<?php 
//code for portfolio section of site
?>

<?php function generateResume(iterable $resumeData) { ?>
	<?="<ul class='resume-list'>"?>
		<?php foreach ($resumeData as $data): ?>
		  <?php foreach ($data as $category => $items): ?>
		    <?php echo "<li>" . "<h2>" . $category . "</h2>" . "</li>" .  "<li>" . "<ul>"; ?>

		    <?php foreach ($items as $item => $value): ?>
		      <?php echo "<li> " . $value . "</li>"?>
		    <?php endforeach; ?>
		    <?="</ul> </li>"?>
		  <?php endforeach; ?>
		<?php endforeach; ?>

	<?="</ul>"?>
<?php }?>


<?php function generateGoals(iterable $goalData) {?>
	<ul class="goal-list">
  <?php
  	foreach($goalData as $data) {
			foreach($data as $key => $values) {
		    echo "<li>" . "<h2>$key</h2>";
			  
	      foreach((array)$values as $value) {
	        // remove the square brackets from the string
	        echo str_replace(array('[',']'), "", $value ). " ";
	      }
		  }
		    echo "</li>";
		}
   ?>
  </ul>
<?php }?>


<?php function generatePortfolio(iterable $portfolioData) {?>
	<ul>
	<?php foreach ($portfolioData as $portfolio): ?>
		<li>
			<?=$portfolio["name"]?>
			
			<ul>
				<li><?=$portfolio["description"]?></li>
				<li><a href="<?=$portfolio["link"]?>"><?=$portfolio["name"]?></a></li>
			</ul>
		</li>
	<?php endforeach; ?>
	</ul>
<?php }?>


<?php 
  //get all projects
  function getAllProjects() {
		//get the project data
		$json = file_get_contents("database/projects.json");
		//decode data to PHP
		return json_decode($json, true);
		//return data
	}

  //get individual project that matches slug
	function getProjectBySlug($slug) {
		//get projects
		$projects = getAllProjects();
		//look at each project
		foreach($projects as $project) {
			//if it matches the given slug
			if ($project["slug"] === $slug) {
	  		//return data for that project
				return $project;
			}
		}
	}

	function getAllExperiments() {
		//get the project data
		$json = file_get_contents("database/experiments.json");
		//decode data to PHP
		return json_decode($json, true);
		//return data
	}


	function getExperimentBySlug($slug) {
		//get projects
		$experiment = getAllProjects();
		//look at each project
		foreach($experiment as $experiment) {
			//if it matches the given slug
			if ($experiment["slug"] === $slug) {
	  		//return data for that project
				return $experiment;
			}
		}
	}


	// get all the case studies
	// decode the JSON to PHP
	//return case study
	function getAllCaseStudies() {
		$json = file_get_contents("database/case-studies.json");
		return json_decode($json, true);
	}

	//get the case study that matches a certain slug
	function getCaseStudyBySlug($slug) {
		//get case studies
		$caseStudies = getAllCaseStudies();
		// look at each case study
		foreach ($caseStudies as $caseStudy) {
			//if it matches slug parameter
			if ($caseStudy["slug"] === $slug) {
				//return case study data
				return $caseStudy;
			}
		}
	}

	// function generateNavLinks() {
	// 	include "database/nav-data.php";

	// 	foreach($navLinks as $navLinkText => $navLink) {
	// 		echo " " . "<a href='$navLink'" . styleAnchorLink($navLinkText) . ">" . $navLinkText . "</a>";
	// 	}
	// }

	function globalNav() {
		include "database/nav-data.php";
		$globalLinks = ["home", "about", "projects", "experiments"];

    foreach($navLinks as $navLinkText => $navLink) {
      if ( in_array($navLinkText, $globalLinks) ) {

        echo " " . "<a href='$navLink' " . styleAnchorLink($navLinkText) . ">" . $navLinkText . "</a>";
      }
    }
	}

	function aboutPageNav() {
		include "database/nav-data.php";

		$aboutLinks = ["about", "writing", "resume", "goals", "contact"];

		echo "<aside class='about-links'>" . "<inner-column>". "<h2>curious about me?</h2>" . "<nav class='about-page-nav'>";

    foreach($navLinks as $navLinkText => $navLink) {
      if ( in_array($navLinkText, $aboutLinks)) {
				echo " " . "<a href='$navLink'" . styleAnchorLink($navLinkText) . ">" . $navLinkText . "</a>";
      }
    }
    echo "</nav>" . "</inner-column>" . "</aside>";
	}

	function generatePageTitle() {
		$articleH1 = ""; 

		if ( !isset($_GET["page"]) && getPage() !== "false")  {
			$articleH1 = "Hi!";
			return $articleH1;
		}
		else if (getPage() == "false") {
			$articleH1 = "404!";
			return $articleH1;
		}

		else if( isset($_GET["page"]) ) {
			switch ( getPage() ) {
			
				case "home":
				$articleH1 = "Hi!";
					return $articleH1;
					break;

				case "projects":
					$articleH1 = "My Projects";
					return $articleH1;
					break;

				case "project":
					$articleH1 = "My Project";
					return $articleH1;
					break;

				case "project":
					$articleH1 = "My Project";
					return $articleH1;
					break;			

				case "blog-post-detail":
					$articleH1 = "My blog post detail";
					return $articleH1;
					break;

				case "experiment-detail":
					$articleH1 = "experiment detail";
					return $articleH1;
					break;

				case "case-study":
					$articleH1 = "case study";
					return $articleH1;
					break;		

				// case "project":
				// 	$articleH1 = "my project";
				// 	return $articleH1;
				// 	break;	
						
				case "about":
					$articleH1 = "About me";
					return $articleH1;
					break;

				case "resume":
					$articleH1 = "My resume";
					return $articleH1;
					break;

				case "writing":
					$articleH1 = "My writing";
					return $articleH1;
					break;		
				
				case "goals":
					$articleH1 = "My goals";
					return $articleH1;
					break;

				case "experiments":
					$articleH1 = "My experiments";
					return $articleH1;
					break;

				case "contact":
					$articleH1 = "contact me?";
					return $articleH1;
					break;

				case "site-map":
					$articleH1 = "sitemap links";
					return $articleH1;
					break;

				case "style-guide":
					$articleH1 = "site style guide";
					return $articleH1;
					break;		

				case "":
					$articleH1 = "Hi!";
					return $articleH1;
					break;	
						
				default:
					$articleH1 = "404!";
					return $articleH1;
			}
		}
		// return $articleH1;
	}

	function getClassByQuery() {
		// $classSuffix = "-main";

		if (checkPages(getPage()) !== "true") {
			return "404";
		}
		else if (getQueryString() === null) {
			return "home";
		}
		else {
			return getPage();
		}
	}

function styleSitemapLink() {
	$navLinkStyle = " style = 'border-bottom: 2px solid maroon; padding-bottom: 2px'";
	if (getQueryString() === "site-map" && 
		getQueryString() != null) {
		// return "";
		return $navLinkStyle;
	}
	return "";
}

?>


<?php function formatSitemap(array $sitemapData) { ?>
	<?php echo "<ul class='site-map-list'>"?>	
		<?php foreach($sitemapData as $levelOneKey => $levelOneValue):?>
			
			<?php echo "<li>" . "<h3>$levelOneKey</h3>"; ?>
				<?php echo "<ul class='home-page-list'>"; ?>

					<?php foreach($levelOneValue as $levelTwoKey => $levelTwoValue): ?>
					
						<?php if ($levelTwoKey === "projects"): ?>
							
								<?php echo "<li>" . "<h3>" . $levelTwoKey . "</h3>"; ?>

									<?php echo "<ul class='sitemap-project-list'>"; ?>

										<?php foreach($levelTwoValue as $projectKey => $projectValue): ?>
											<?php echo "<li>" . $projectValue["title"] . "</li>"; ?>
														
															<?php echo "<li>" . $projectValue['title'] . " detail page</li>"; ?>
															<?php echo "<li>" . $projectValue['title'] . " case study page". "</li>"; ?>
										<?php endforeach; ?>
									<?php echo "</ul>"; ?>
								<?php "</li>"; ?>	
						<?php endif; ?>

					<?php if($levelTwoKey === "about"): ?>
						<?php echo "<li>" . "<h3>" . $levelTwoKey . "</h3>" ?>
							<?php echo "<ul class='sitemap-about-list'>"; ?>
							<?php foreach($levelTwoValue as $aboutArrIndex): ?>
								<li><?=$aboutArrIndex?></li>
							<?php endforeach;?>
							<?="</ul>"?>
						<?="</li>";?>
					<?php endif; ?>


					<?php if($levelTwoKey === "experiments"): ?>
						<?php echo "<li>" . "<h3>" . $levelTwoKey . "</h3>" ?>
							<?php echo "<ul class='experiment-list'>"; ?>
								<?php foreach($levelTwoValue as $experimentArrIndex => $experimentIndexValue): ?>
									<?php echo "<li>" . $experimentIndexValue["name"] . "</li>"?>
								<?php endforeach;?>	
							<?="</ul>"?>
						<?="</li>";?>
					<?php endif; ?>


					<?php endforeach; ?>
				<?php echo "</ul>";?>		
		<?php endforeach; ?>
	<?php echo "</ul>"?>

<?php }?>
 






