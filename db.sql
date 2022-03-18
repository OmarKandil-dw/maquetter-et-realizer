

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
   description          varchar(500),
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


INSERT INTO `produit` (`idProduit`, `libelle`, `description`, `prix`, `stock`, `Promo`, `image`) VALUES
('PD62273b4f4873b9.99022629', 'Studio 1886 Legendary  Hair & Body Wash', 'Elevate your grooming routine with an all-in-one hair and body wash featuring the invigorating scent of Legendary. This richly lathered formula leaves hair and skin feeling clean and lightly scented. 6.7 fl. oz.', '19', 20, 1, 'product details/images/image 7.png'),
('PD62273b9fbf4bb9.92355051', 'Wild Country After  Shave Splash', 'Make a splash with an aftershave in our best-selling scent. It leaves skin feeling smooth after shaving and lightly fragranced with the woody, earthy scent of Wild Country. 4 fl. oz.', '13', 15, 0, 'product details/images/image 8.png'),
('PD62273bc380ab91.95603464', 'Black Suede Roll-On  Antiperspirant Deodorant', 'Our Black Suede Collection is effortlessly cool. Go ahead, show your smooth side.', '19', 5, 0, 'product details/images/image 5.png'),
('PD62273c53161648.57023581', 'Gentology Herb & Aloe 2-in-1  Hair and Body Wash', '\nLather up with this one-and-done formula, which serves as a soothing aftershave and daily moisturizer. Made with aloe and natural herbal and citrus extracts and niacinamide. 5.1 fl. oz.', '16', 30, 1, 'product details/images/image 13.png'),
('PD62273c769d5e18.24254648', 'Wild Country Hair and Body Wash', 'Wild Country captures your untamed spirit with a rugged blend of fresh and aromatic notes. Reign in your confident style, then let it loose with this crowd-favorite men’s fragrance. The gentle, non-drying cleanser leaves your hair and body lightly scented with a rich, invigorating lather. 5 fl. oz.', '16', 3, 0, 'product details/images/image 14.png'),
('PD62273ca2207386.21275524', 'Gentology Herb & Aloe  Total Care Moisturizer', '\nSimplify your grooming routine by combining skin care with cleansing. Designed for the hair, face and body, this multiuse formula washes away dirt and sweat to leave you feeling fresh and clean. Made with aloe and herbal extracts like eucalyptus and lemongrass that help calm, soothe, energize and deodorize. 10.1 fl. oz.', '4', 0, 0, 'product details/images/image 15.png'),
('PD62273ce62c2cc7.09810153', 'Black Suede Ultimate  Eau de Toilette', 'The Mesmerize Collection: captivate with a single glance.\n\nReveal your mysterious side with this captivating men’s scent that features a hypnotic blend of warm and intoxicating notes. The fragranced antiperspirant is non-whitening, quick drying and anti-staining as it glides on smoothly for long-lasting odor protection. 2.6 fl. oz.', '27', 1, 0, 'product details/images/image 16.png'),
('PD62273d0bddc404.09414244', 'Rice Water Bright Gentle  Exfoliating Foaming Cleanser', 'Rice water, the milky white water obtained from rinsing rice, is enriched with vitamins A, B and E, ceramide and minerals to help skin feel moisturized and look radiant.\n', '16', 50, 1, 'product details/images/image 17.png'),
('PD62273d20c1bcc6.46767450', 'Mesmerize Roll-On  Antiperspirant Deodorant', 'INTRODUCING BLACK SUEDE ULTIMATE\nEffortlessly cool, unreservedly charming and brimming with confidence. Take your cool factor to the next level with distinctive and bold notes and precious ingredients for a luxe feel that lasts.\n', '4', 15, 0, 'product details/images/image 18.png'),
('PD62273d3fdfe396.84904597', 'On Duty Unscented Roll-On  Antiperspirant Deodorant ', 'On Duty Unscented Bonus Size Roll-On Antiperspirant Deodorant keeps you fresh, clean and odor-free for hours with a non-irritating formula that\'s free of any perfumes or fragrances. 2.6 fl. oz.', '4', 10, 0, 'product details/images/image 4.png'),
('PD62273d59223e89.35252573', 'Black Suede Cologne', 'Our Black Suede Collection is effortlessly cool. Go ahead, show your smooth side.\n\nA smooth fragrance of warm, woody notes highlighted by a leather accord. 3.4 fl. oz.', '22', 20, 0, 'product details/images/image 5.png'),
('PD62273d6d091214.69915429', 'Avon Exploration  Eau de Toilette', 'Set sail for adventure with the fresh and clean blend of Avon Exploration Eau de Toilette. 2.5 fl. oz.', '25', 3, 0, 'product details/images/image 6.png'),
('PD62273d89e6c7f3.31531367', 'Black Suede  Aftershave Conditioner', 'Our Black Suede Collection is effortlessly cool. Go ahead, show your smooth side.\n\nThe fresh and aromatic fusion of notes in Black Suede make it always a classic. The fragranced after shave conditioner calms and moisturizes skin for an allover cool effect. 3.4 fl. oz.', '8', 0, 0, 'product details/images/image 2.png'),
('PD62273da448cc77.88864571', 'Perceive Cologne', 'Let your senses be your guide with this fresh and clean men’s fragrance. 3.4 fl. oz.', '40', 0, 0, 'product details/images/image 3.png'),
('PD62273db8b50b72.17794983', 'Black Suede  Hair & Body Wash', 'Lather from head to toe with the masculine scent of Black Suede that lasts throughout the day and into the night. 5 fl. oz.', '8', 0, 0, 'product details/images/image 1.png');


