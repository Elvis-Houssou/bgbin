<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>
<body>
    <h4>Rendez-vous sur la page administrateur pour plus d'information.</h4>
    <h4>Mail du Client : {{$orderEmail}} </h4>
    <h4>Contact du Client : {{$orderPhone}} </h4>
    @php
        $orderMesureArray = explode(",", $orderMesure);
    @endphp

    <h4>Mesure du Client :</h4>
        <p>- Longueur haut  : {{ $orderMesureArray[0] }}</p>
        <p>- Epaule : {{ $orderMesureArray[1] }}</p>
        <p>- Poitrine : {{ $orderMesureArray[2] }}</p>
        <p>- Tour de taille : {{ $orderMesureArray[3] }}</p>
        <p>- Longueur de hanche : {{ $orderMesureArray[4] }}</p>
        <p>- Tour de poignet : {{ $orderMesureArray[5] }}</p>
        <p>- Longueur de pantalon : {{ $orderMesureArray[6] }}</p>
        <p>- Ceinture  : {{ $orderMesureArray[7] }}</p>
        <p>- Bassin : {{ $orderMesureArray[8] }}</p>
        <p>- Cuisse : {{ $orderMesureArray[9] }}</p>
        <p>- Genou : {{ $orderMesureArray[10] }}</p>
        <p>- Bas : {{ $orderMesureArray[11] }}</p>
        <!-- Ajoutez d'autres balises <p> avec d'autres informations si nécessaire -->

    <h4>Doublure : {{$orderDoublure}} </h4>
    <h4>Description : {{$orderDescription}} </h4>
    <h4>Genre du Client : {{$orderCategorie}} </h4>
    <h4>Categorie du Client {{$orderSubCategorie}} </h4>
    <h4>Vous venez de recevoir une commande.</h4>

</body>
</html>
