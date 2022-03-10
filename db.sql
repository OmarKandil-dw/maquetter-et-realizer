

Create database ecommerce;
Use ecommerce;

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
   idCommande           varchar(254),
   date                 datetime,
   adresseLivraison     varchar(254),
   idClient INT REFERENCES Client(idClient),
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
   idCommande           varchar(254),
   idProduit            varchar(254),
   quantite             int,
   FOREIGN KEY(idProduit) REFERENCES Produit(idProduit),
   FOREIGN KEY(idCommande) REFERENCES Commande(idCommande),
   primary key (idCommande, idProduit)
);

