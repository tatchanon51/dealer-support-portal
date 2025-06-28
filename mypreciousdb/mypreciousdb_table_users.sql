
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `dealer_id` varchar(25) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`dealer_id`, `name`, `password`) VALUES
('101', 'บริษัท นิด้า ค้ารถ จำกัด', '192118'),
('102', 'Get Auto', '191919'),
('103', 'Royde Super', '191515'),
('104', '14 Super Motors', '080308'),
('105', 'Sabaru BKK', 'bkk9344333'),
('106', 'Sukicha Nakarin', '171708'),
('107', 'Keepers Car', '171819'),
('108', 'Golden Square Auto', '263229'),
('109', 'Signature Super', '081818'),
('110', 'Car Delight', '150909'),
('111', 'Independent Me', '150712'),
('112', 'Golden Circle Auto', 'ZJfq8bQh&B-JZ4@'),
('113', 'Top Road', '091811'),
('114', 'Spatun Arena', 'k-sE\"{+DH?5!}`{'),
('115', 'Car Infinite', 'asia2019'),
('201', 'Cheer Auto Cars', '131215'),
('202', 'Golden Bubble Auto', 'ZJfq8bQh&B-JZ4@'),
('203', 'Thong Motors', '060206'),
('204', '14 cars', '010102'),
('205', 'Life Style motor', '140707'),
('206', 'Dude Autohaus', 'ZJfq8bQh&B-JZ4@'),
('207', 'Tatchanon Yontrakan', '100406'),
('208', 'Yon Yontrakarn', '010000'),
('209', 'March Samran Auto', '020201'),
('210', 'Group Moter', '030501'),
('211', 'Radar Motor', '020201'),
('212', 'AJ Premium Motor(Thai)', '040808'),
('213', 'AST Motor', '030304'),
('214', 'Chiangsang Subaru Lampang', '030903'),
('215', 'Subaru Sakaeo', '020100'),
('216', 'A.N.T Motorsport', '000102'),
('217', 'Sirichai Motorsales Co., Ltd.', 'niknana123'),
('218', 'Chiangsang Subaru Chiangmai', 'sucm053241888'),
('219', 'Subaru Roi-et', '7FQZzz'),
('220', 'LMV Auto Co., Ltd.', 'arr0952952353'),
('221', 'Stargate Auto', 'STGsaf'),
('222', 'Chiangsang Subaru Chiangrai', 'cssubarucr'),
('777', 'MIT Serithai', 'cgU6Gd'),
('778', 'MIT Kanchanaphisek', 'L26zdz'),
('779', 'TCAH Chon Buri', 'p5fNub'),
('998', 'Branches Management', 'Iamthebest1872'),
('999', 'You are so awesome.', 'Iamthebest1872');
