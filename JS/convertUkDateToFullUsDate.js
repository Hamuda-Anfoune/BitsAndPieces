function convertUkDateToFullUsDate(ukDate) {
    var splitDate = ukDate.split('/');
    var month = splitDate[1] - 1; //Javascript months are 0-11

    return new Date(splitDate[2], month, splitDate[0]);
}
