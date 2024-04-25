const url = 'https://movie-database-alternative.p.rapidapi.com/?s=Avengers%20Endgame&r=json&page=1';
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Key': '876e74fc04mshd7d4c1631bae02ep14263ejsnf98e26314b90',
		'X-RapidAPI-Host': 'movie-database-alternative.p.rapidapi.com'
	}
};

async function traer_datos(){

try {
	const response = await fetch(url, options);
	const result = await response.text();
	console.log(result);
} catch (error) {
	console.error(error);
}
}

traer_datos();