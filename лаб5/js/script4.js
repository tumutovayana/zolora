function isPangramma(offer) {
	const alphabetCount = 33;
	var noSpacesString = offer.replace(/ /g, '');
	if (noSpacesString.length == alphabetCount) {
		return true;
	} else {
		const charArray = noSpacesString.split('');
		const charSet = new Set(charArray);
		return charSet.size == alphabetCount ? true : false;
	}
}
const pangramma = isPangramma("разглашение тайны может привести и к более суровым наказаниям");
console.log(pangramma);
