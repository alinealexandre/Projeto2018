<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<link rel="icon" href="img/logo2.png" type="image/x-icon"/>
    <title>Sticky and Scroll</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
        font-family: sans-serif;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        background: #fde9e4fa;
    }

    header {
        background: #fab1a0;
        height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
    }

    header h1 {
        font-size: 5em;
        line-height: 0.2;
        text-align: center;
        color: #ff7675;
        text-shadow: 5px 5px 10px #a74a4a;
    }

    nav {
        position: sticky;
        top: 0;
        z-index: 2;
    }

    ul {
        background: #ff7675;
        display: flex;
        list-style: none;
        width: 100%;
        font-size: 18px;
        height: 10vh;
        align-items: center;
        justify-content: space-evenly;
    }

    a {
        color: white;
        text-decoration: none;
        text-transform: uppercase;
    }

    .container {
        width: 90%;
        max-width: 800px;
        margin: 50px auto;
    }

    section {
        font-size: 20px;
        font-family: sans-serif;
        font-weight: 200;
        line-height: 2;
        color: rgb(58, 58, 58);
        padding-top: 12vh;
    }

    h1 {
        color: #d63031;
        font-size: 43px;
        line-height: 55px;
        margin-bottom: 20px;
    }

    .link {
        color:#d63031;
        display: inline-block;
        font-size: 20px;
        margin: 50px 0 100px;
        border-bottom: 1px dashed #d63031;
        text-transform: none;
    }

    .sticky {
        position: sticky;
        bottom: 50px;
        z-index: 1;
    }

    img {
        max-width: 90%;
    }

    @media(max-width: 700px) {
        ul {
            font-size: 13px;
        }
    }
</style>

<body>

    <header>
        <h1>Scroll E Sticky!</h1>
    </header>

    <nav>
        <ul>
            <li><a href="#hey">Hey!</a></li>
            <li><a href="#cool">Cool</a></li>
            <li><a href="#truth">Truth</a></li>
            <li><a href="#all-css">All CSS</a></li>
        </ul>
    </nav>

    <article class="container">
	    <section id="hey">
	        <h1>Hey, motherfucker!</h1>
	        <p>My money's in that office, right? If she start giving me some bullshit about it ain't there, and we got to go someplace else and get it, I'm gonna shoot you in the head then and there. Then I'm gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I'm talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand? </p>
	        <p>Look, just because I don't be givin' no man a foot massage don't make it right for Marsellus to throw Antwone into a glass motherfuckin' house, fuckin' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, 'cause I'll kill the motherfucker, know what I'm sayin'? </p>
	    </section>

	    <section id="cool">
	        <h1>Fucking cool, no?</h1>
	        <p>Normally, both your asses would be dead as fucking fried chicken, but you happen to pull this shit while I'm in a transitional period so I don't wanna kill you, I wanna help you. But I can't give you this case, it don't belong to me. Besides, I've already been through too much shit this morning over this case to hand it over to your dumb ass. </p>
	        <p>Well, the way they make shows is, they make one show. That show's called a pilot. Then they show that show to the people who make shows, and on the strength of that one show they decide if they're going to make more shows. Some pilots get picked and become television programs. Some don't, become nothing. She starred in one of the ones that became nothing. </p>
	    </section>
    </article>

</html>

