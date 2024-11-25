# Marco Rizzuto's personal website

## Why I created this website
This website is a repository of the learning (and experimenting) I did as a [Perpetual Education](https://perpetual.education) beta-tester. 

## Technologies used
- [`PHP`]
- [`CSS`]
- [`HTML 5`]
- [`Javascript`]

## Link to project
[my website](https://marcorizzuto.net)

## Special thanks to 
[Derek Wood](https://github.com/sheriffderek), my Perpetual Education mentor and friend. For your knowledge and guidance

The Perpetual Education students, for their feedback and community

# Project goal
To create a multipage website using secure file structures and separation of concerns.
- Decouple the data from the HTML
- Have the data in a database and use the HTML as templates

- Showcase my research and UX skills
	- Have user-defined theme changes
	- Research a industry and create the feel/style of the website
- Practice secure full-stack web architecture
	- sensitive files are outside of doc root
	- Data is validated and sanitizied on front and back end

# Project structure
- The project uses the model, view, and controller (MVC)

- Model
	- It uses data structures
		- PHP associative arrays 
	- JSON

- View
	- page-specific logic (based on query paramaters) to output the data

- Controller
	- routes/maps the query to the correct page



