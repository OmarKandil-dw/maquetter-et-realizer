

Create database GestionMagasin;
Use GestionMagasin;

drop table if exists Client;

drop table if exists Commande;

drop table if exists DetailsCommande;

drop table if exists Produit;


create table Client
(
   idClient             varchar(254),
   nom                  varchar(254),
   prenom               varchar(254),
   adresse              varchar(254),
   telephone            varchar(254),
   email                varchar(254),
   pass                 varchar(254),
   primary key (idClient)
);



create table Commande
(
   idCommande           int NOT NULL AUTO_INCREMENT,
   date                 date,
   adresseLivraison     varchar(254),
   idClient             varchar(254),
   FOREIGN KEY(idClient) REFERENCES Client(idClient),
   primary key (idCommande)
);


create table Produit
(
   idProduit            varchar(254),
   libelle              varchar(254),
   description          varchar(254),
   prix                 numeric(8,0),
   stock                int,
   image                varchar(254),
   Promo                tinyint(1) DEFAULT NULL,
   primary key (idProduit)
);


create table DetailsCommande
(
   idCommande           int NOT NULL AUTO_INCREMENT,
   idProduit            varchar(254),
   quantite             int,
   FOREIGN KEY(idProduit) REFERENCES Produit(idProduit),
   FOREIGN KEY(idCommande) REFERENCES Commande(idCommande),
   primary key (idCommande, idProduit)
);


INSERT INTO `client` (`idClient`, `nom`, `prenom`, `adresse`, `telephone`, `email`, `pass`) VALUES
('MA62320e615f5b34.95045208', 'aatrox', 'Battery', '124qasdf', '0601224180', 'younes_tm@outlook.com', 'Testing1234'),
('MA62321090ae3c13.54190793', 'aatrox', 'Elabbas', '124qasdf', '0601224181', 'younes_ab@outlook.com', '1');



INSERT INTO `produit` (`idProduit`, `libelle`, `description`, `prix`, `stock`, `image`, `Promo`) VALUES
('PD622a7aa82ded18.78304602', 'first', 'first', '14', 14, 'product details/images/image 1.png', 1),
('PD622a7ab1f3ee47.91542660', 'sec', 'sec', '14', 14, 'product details/images/image 2.png', 0),
('PD622a7abe182d25.62632281', 'third', 'third', '14', 14, 'product details/images/image 3.png', 1),
('PD622a7afdb75960.88761961', 'four', 'fourth', '14', 14, 'product details/images/image 4.png', 1),
('PD622a7b1344a1f2.78170507', 'five', 'five', '14', 5, 'product details/images/image 5.png', 0);


