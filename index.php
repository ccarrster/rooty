<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chris Carr - Portfolio</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/slick-theme.css" rel="stylesheet">
    <style>
    .project{
    	margin: 60px;
    }
    .project img{
    	width: 250px;
    	float: left;
    }
    body{

    }
    .title{
    	float: left;
    	font-size: 32px;
    	padding-left: 20px;
    }
    .details{
    	clear: both;
    }
    .book{
    	max-height: 200px;
    	max-width: 150px;
    }
    .employer{
    	width: 200px;
    	max-height: 200px;
    }
    .company{
    	font-size: 32px;
    }
    .fun{
    	max-width: 200px;
    	max-height: 200px;
    }
    </style>
  </head>
  <body>

    <h1>Chris Carr - Full Stack Software Developer - 11+ Years experience</h1>
    <div>Experience working with technologies and methodologies</div>
    <div>C++, C#.NET, Java, PHP, Python, Ruby, JavaScript, Perl, ASP.NET, XML, JSON, jQuery, BootStrap, Ext JS, CoffeeScript, RSpec, Rack, Backbone.js, Marrionette.js, Eco Templates, SQL, Java, J2ME, JSP, ASP, CSS3, HTML5, AJAX, LESS, WordPress, MongoDB, MySQL, SQL Server, Oracle, Progress DB, PostgreSQL, Git, Subversion, VSS, PHPUnit, JUnit, Apache web server, Apache Tomcat, Apache Maven, Apache Ant, NGINX, OS X, Windows, Linux, MKS, Jira, Trello, Slack, Spring Framework, Eclipse, Visual Studio, PHPStorm, NetBeans, Sublime, Textpad, Waterfall, TDD, Agile, Kanban, Scrum</div>
    <div>Hackathons and Peer Groups</div>
    <div class="project"></div>
    <div>Reading</div>
    <div class="reads"></div>
    <div>Working</div>
    <div class="jobs">
    <div>
    <img class="employer" src="img/employer/cober.png" alt="logo"><div class="company"><a target="_blank" href="http://cobersolutions.com/">Cober</a></div><div class="details">Senior Software Developer July 2015 - Present</div><div>Php, SQL, Java, Python, Asp.Net, C#.net, JavaScript, CSS, HTML, WordPress, Sublime, MySQL, SQL Server, Progress DB, Pageflex Storefront, HP Smartstream Director, Github, PHPUnit, JUnit, OSX, Windows</div>
    </div>
    <div>
    <img class="employer" src="img/employer/demure.png" alt="logo"><div class="company"><a target="_blank" href="https://seekda.com/en/">Demeure(Seekda)</a></div><div class="details">Software Developer December 2014 - May 2015</div><div>Javascript, CoffeeScript, Ruby, RSpec, Rack, Backbone.js, Marrionette.js, MySql, Eco Templates</div>
    </div>
    <div>
    <img class="employer" src="img/employer/plum.png" alt="logo"><div class="company"><a target="_blank" href="http://plum.io/">Plum</a></div><div class="details">Javascript Developer September - October 2014</div><div>Prototype design, Javascript plugin creation, Third party integration</div>
    </div>
    <div>
    <img class="employer" src="img/employer/tulip.png" alt="logo"><div class="company"><a target="_blank" href="https://tulip.io/">Tulip Retail</a></div><div class="details">Software Developer May 2013 - June 2014</div>
    </div>
    <div>
    <img class="employer" src="img/employer/well.png" alt="logo"><div class="company"><a target="_blank" href="https://well.ca/">Well.ca</a></div><div class="details">Software Developer September 2011 - April 2013</div>
    </div>
    <div>
    <img class="employer" src="img/employer/doxim.png" alt="logo"><div class="company"><a target="_blank" href="https://www.doxim.com/">Doxim(Arius)</a></div><div class="details">Software Developer September 2010 - August 2011</div>
    </div>
    <div>
    <img class="employer" src="img/employer/beanstream.png" alt="logo"><div class="company"><a target="_blank" href="http://www.beanstream.com">Beanstream</a></div><div class="details">Software Developer May 2009 - September 2010</div>
    </div>
    <div>
    <img class="employer" src="img/employer/selkirksystems.jpg" alt="logo"><div class="company"><a target="_blank" href="http://www.selkirksystems.com/">Selkirk Systems</a></div><div class="details">Software Developer September 2005 - March 2009</div>
    </div>
    </div>
    <div>Fun</div>
    <div>
    	<img class="fun" src="img/fun/gardening.jpg" alt="">
    	<img class="fun" src="img/fun/hammock.jpg" alt="">
    	<img class="fun" src="img/fun/motorcycle.jpg" alt="">
    	<img class="fun" src="img/fun/solarcooker.jpg" alt="">
    	<img class="fun" src="img/fun/starfire.jpg" alt="">
    	<img class="fun" src="img/fun/worms.jpg" alt="">
    </div>
    <div>
    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
<script type="IN/MemberProfile" data-id="https://www.linkedin.com/in/christopher-carr-220a7924" data-format="inline" data-related="false"></script></div>
	<div>
	<a class="twitter-timeline" href="https://twitter.com/MoonScientist">Tweets by MoonScientist</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
	</div>

    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script>
    	class Project{
    		constructor(image, name, details, url){
    			this.image = image;
    			this.name = name;
    			this.details = details;
    			this.url = url;
    		}
    	}


    	var projects = [];
    	projects.push(new Project("mastercardnxt.png", "MasterCard NXT Hackathon - Movie Tickles", "Buy your tickets, reserve your seat, get directed to the theater, get food delivered to your seat. Won first place $10,000 with co-workers from tulip retail", "https://vimeo.com/75912199"));
    	projects.push(new Project("western.png", "Western Card Game - Kraplow", "Web multiplayer version of a popular western card game. All coded by me", "http://chriscarr.name/westerncardgame/"));
    	projects.push(new Project("hackernest.jpg", "HackerNest", "Monthly gathering of tech nerds. Beer by donation, Tech Announcements", "https://www.meetup.com/HackerNestKW/"));
    	projects.push(new Project("startbeer2.jpg", "Startups and Beer", "Showcase a few startups. Very loud. Drink tickets and snacks", "http://startupsandbeer.com/"));
		projects.push(new Project("techjam.jpg", "Communitech Tech Jam", "Local business presenations and large job fair", "https://www.communitech.ca/get-involved/events/"));
		projects.push(new Project("react.jpg", "Development Meetups", "ReactJS, Communitech P2P, UX Waterloo, The Front Edge, Guelph PHP, Startup Drinks, Agile/Lean", "https://www.communitech.ca/how-we-help/career-development/peer2peer-groups/"));
		projects.push(new Project("parkit.jpg", "Waterloo Codefest Hackathon - ParkIt", "Find the best open spot for you. Get reminders on where you parked, how long you have left to park. We tell you where to park it", "https://devpost.com/software/park-it-g7blco"));
		projects.push(new Project("gallery.jpg", "Hack the Orchestra - Be//From", "Hear the orchestra echo from the attendees homes", "https://devpost.com/software/ho"));
		projects.push(new Project("pathfinder.png", "Canadian Open Data Experience 2016 - PathFinder", "Help find a career path using canadian open data", "http://chriscarr.name:8081/code2015/"));
		projects.push(new Project("squalid.jpg", "Canadian Open Data Experience 2015 - Squalid Salad", "Age specific preventative measures for child home safety. Canada wide, solo hack, top 15, demoed in Toronto", "http://chriscarr.name:8081/squalidsalad/"));
		projects.push(new Project("kutafuta.png", "Sortable Hackathon - Kutafuta", "Kijiji arbitrage. Man in the middle. Scrape car buy and sell data from kijiji. Our team of  4 came in 2nd place", "https://christophergordoncarr.wordpress.com/2013/02/03/sortable-data-hack/"));
		projects.push(new Project("dryphone.jpg", "PCH Hardware Hackathon - Dry Phone", "Upgrade your washing machine to detect NFC and Wireless devices, so you do not ruin your electronics. I pitched the idea and team members signed on. Our team got an honerable mention", "https://devpost.com/software/dry-phone"));
		projects.push(new Project("startupweekend.jpg", "Startup Weekend KW - Ecoweenies", "We created an app to find and compare local produce", "https://christophergordoncarr.wordpress.com/2013/04/08/startup-weekend-kitchener-waterloo-2013/"));
		projects.push(new Project("stackthumb.png", "Stacking Blocks Game", "Downloadable falling block game made in Java", "http://chriscarr.name/stack/stackemblocks.jar"));
		projects.push(new Project("pokerthumb.png", "Video Poker", "Downloadable video poker game made with Java", "http://chriscarr.name/poker/CCarrVideoPoker.jar"));
		projects.push(new Project("maze.jpg", "Facebook Toronto Hackathon - Maze Game", "Amazing Labyrinth web game started at a Facebook hackathon", "http://chriscarr.name:8081/maze/"));
		projects.push(new Project("iou.jpg", "Snack Tracker", "Multi-Store IOU tracker. Sign up for a free store today", "http://chriscarr.name:8081/ioyoudemo/index.php"));
		projects.push(new Project("halfsiscreen.png", "Half.si", "Why pay more, when you can buy in bulk and split the cost?", "http://half.si/"));
		projects.push(new Project("game.png", "Bungle Game", "A web boggle clone"));
		projects.push(new Project("anygame.png", "Any Game Table", "Easily put any game on the web. Checkers, Chess, Cards. Double click to flip", "http://chriscarr.name/checkers/example.html"));
    	for(projectKey in projects){
    		var project = projects[projectKey];
    		var urlString = "";
    		if(project.url != null){
    			urlString = " <a href='"+project.url+"' target='_blank'>"+project.url+"</a>";
    		}
    		$(".project").append('<div><img src="img/'+project.image+'" alt="'+project.name+'"><div class="title">'+project.name+'</div><div class="details">'+project.details+urlString+'</div></div>');
    	}
    	class Book{
    		constructor(image, url){
    			this.image = image;
    			this.url = url;
    		}
    	}
		var books = [];
		books.push(new Book("books10.jpeg", "https://www.amazon.ca/gp/product/0131103628/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0131103628&linkId=493e8bc4db224d977d2a47ad18d1e1d6"));
		books.push(new Book("books13.jpeg", "https://www.amazon.ca/gp/product/0321934113/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0321934113&linkId=f4e1ad67820f6895c9ab2fbd429686df"));
		books.push(new Book("books14.jpeg", "https://www.amazon.ca/gp/product/0465067107/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0465067107&linkId=a7f08837eec5e8b1d792159f373abc8b"));
		books.push(new Book("books5.jpeg", "https://www.amazon.ca/gp/product/097451408X/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=097451408X&linkId=d283db1db189ac7ba4131dbc5f6a6fca"));
		books.push(new Book("books7.jpeg", "https://www.amazon.ca/gp/product/0974514047/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0974514047&linkId=399116eb5fbfc1754df3a3620cf1f5b2"));
		books.push(new Book("books8.jpeg", "https://www.amazon.ca/gp/product/0978739213/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0978739213&linkId=73fe748e1e920dde067e57dacd9a7e09"));
		books.push(new Book("clean code.png", "https://www.amazon.ca/gp/product/0132350882/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0132350882&linkId=54cf4205d2b4450dd099e8ab2221f30e"));
		books.push(new Book("closeddoors.jpeg", "https://www.amazon.ca/gp/product/0976694026/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0976694026&linkId=f89482f2f9fef4ccd1986a97121e8638"));
		books.push(new Book("codecomplete.jpeg", "https://www.amazon.ca/gp/product/0735619670/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0735619670&linkId=3eae517bacc5c54720d46f49299e1db5"));
		books.push(new Book("css.jpg", "https://www.amazon.ca/gp/product/0596527330/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0596527330&linkId=48a18ad62498b34254ac03bbe208081d"));
		books.push(new Book("designing.gif.300x400_q95_autocrop_crop_upscale.jpg", "https://www.amazon.ca/gp/product/156205810X/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=156205810X&linkId=bc2168fed5a6c9e571ebc051864c6e6a"));
		books.push(new Book("design-patternsr.png", "https://www.amazon.ca/gp/product/0201633612/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0201633612&linkId=5585d189f043ac85a702a7149afcfdce"));
		books.push(new Book("dontmakemethink.jpg", "https://www.amazon.ca/gp/product/0321344758/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0321344758&linkId=5a29202f28483bb26bc172aa0d835fd0"));
		books.push(new Book("ecommerce.jpg", "https://www.nngroup.com/reports/ecommerce-user-experience/"));
		books.push(new Book("jobyoulove.jpg", "https://www.amazon.ca/gp/product/1934356263/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=1934356263&linkId=206b3f1421c499e495a7f772bf58f1ba"));
		books.push(new Book("kent-beck-extreme-programming-explained.jpg", "https://www.amazon.ca/gp/product/0321278658/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0321278658&linkId=32a866a4f5df83376de7e2b94c420e8d"));
		books.push(new Book("PragmaticProg.jpg", "https://www.amazon.ca/gp/product/020161622X/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=020161622X&linkId=71161f2884472aba2617ef4b99c458b8"));
		books.push(new Book("programmers at work.jpg", "https://www.amazon.ca/gp/product/1556152116/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=1556152116&linkId=b364aba87c3cabcddf01acd6a38ece06"));
		books.push(new Book("psychology.png", "https://www.amazon.ca/gp/product/0932633420/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0932633420&linkId=4fc2c397e818f4d8959c0eada3fb34cb"));
		books.push(new Book("refactoring.jpg", "https://www.amazon.ca/gp/product/0201485672/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0201485672&linkId=c278cf201174263e166964118cb28948"));
		books.push(new Book("regex.jpg", "https://www.amazon.ca/gp/product/0596528124/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0596528124&linkId=88d48c6a1f0eeef6f83c5d84e1be36ed"));
		books.push(new Book("rocketsurgery.jpg", "https://www.amazon.ca/gp/product/0321657292/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=0321657292&linkId=9148be354fbabf4e76baa634140488c5"));
		books.push(new Book("tsgit.jpg", "https://www.amazon.ca/gp/product/1934356158/ref=as_li_tl?ie=UTF8&tag=ccarrster-20&camp=15121&creative=330641&linkCode=as2&creativeASIN=1934356158&linkId=bb578bd7a5a5eaa83353659469bd6e29"));

		for(var i = 0; i < books.length; i++){
			$(".reads").append("<a target='_blank' href='"+books[i].url+"'><img class='book' src='img/books/"+books[i].image+"' alt='book'></a>");
		}

    	$(function() {
    		$('.project').slick({
    			autoplay:true,
    			autoplaySpeed: 5000
    		});
    		$('.reads').slick({
    			autoplay:true,
    			autoplaySpeed: 5000,
    			infinite: true,
				slidesToShow: 3,
				slidesToScroll: 3
    		});
    	});
    </script>
  </body>
</html>