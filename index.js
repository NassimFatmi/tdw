let animals = [];
let vegetables = [];

const getProducts = () => {
	$.ajax({
		method: "GET",
		url: "produit.json",
	}).done(function (data) {
		vegetables = data.vegetables;
		animals = data.animals;
		console.log(animals);
	});
};

const createTable = () => {};
