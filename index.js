const select = document.querySelector("form select");
let type = "vegetables";
select.onchange = (e) => {
	if (e.target.value === "vegetables") {
		type = "vegetables";
		document.querySelector(".vgt").classList.add("show");
		document.querySelector(".anm").classList.remove("show");
	} else {
		type = "animals";
		document.querySelector(".vgt").classList.remove("show");
		document.querySelector(".anm").classList.add("show");
	}
};

const calcTableTotalAnimals = () => {
	const animalsTable = document.querySelectorAll("#table-anm tbody tr td");
	let sumAnimals = 0;
	animalsTable.forEach((animal) => {
		sumAnimals = sumAnimals + parseInt(animal.innerHTML);
	});
	// add to table
	document.querySelector("#total-anm td").innerHTML = sumAnimals;
};
// calc la somme des animaux
calcTableTotalAnimals();

const calcTableVegetables = () => {
	const vegetablesTableSuperficie = document.querySelectorAll(
		"#table-vgt tbody tr td:first-of-type"
	);
	const vegetablesTableProduction = document.querySelectorAll(
		"#table-vgt tbody tr td:nth-of-type(2)"
	);
	let sum1 = 0;
	let sum2 = 0;
	vegetablesTableSuperficie.forEach((item) => {
		sum1 = sum1 + parseInt(item.innerHTML);
	});
	vegetablesTableProduction.forEach((item) => {
		sum2 = sum2 + parseInt(item.innerHTML);
	});
	document.querySelector("#total-vgt td:nth-child(2)").innerHTML = sum1;
	document.querySelector("#total-vgt td:nth-child(3)").innerHTML = sum2;
};

calcTableVegetables();

const submit = document.querySelector('input[type="submit"]');
submit.onclick = (e) => {
	e.preventDefault();

	if (type === "vegetables") {
		const culture = document.getElementById("culture").value;
		const superficie = document.getElementById("superficie").value;
		const total = document.getElementById("total").value;
		if (
			culture.trim() !== "" &&
			superficie.trim() !== "" &&
			total.trim() !== ""
		) {
			const tr = document.createElement("tr");
			const th = document.createElement("th");
			const td1 = document.createElement("td");
			const td2 = document.createElement("td");

			th.appendChild(document.createTextNode(culture));
			td1.appendChild(document.createTextNode(superficie));
			td2.appendChild(document.createTextNode(total));
			tr.append(th, td1, td2);
			document.querySelector("#table-vgt tbody").appendChild(tr);
			calcTableVegetables();
		}
	} else if (type === "animals") {
		const espece = document.getElementById("espece").value;
		const number = document.getElementById("number").value;
		if (espece.trim() !== "" && number.trim() !== "") {
			const tr = document.createElement("tr");
			const th = document.createElement("th");
			const td = document.createElement("td");

			th.appendChild(document.createTextNode(espece));
			td.appendChild(document.createTextNode(number));
			tr.append(th, td);
			document.querySelector("#table-anm tbody").appendChild(tr);
			calcTableTotalAnimals();
		}
	} else {
		return;
	}
};
