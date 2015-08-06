--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `post_code` int(11) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `alt_contact_no` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `created_on` datetime NOT NULL,
  `modified_on` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT '0',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `gender`, `dob`, `address`, `city`, `state`, `post_code`, `contact_no`, `alt_contact_no`, `profile_pic`, `created_on`, `modified_on`, `deleted`, `active`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin@test.com', '', '', '', '0000-00-00', '', '', '', 0, 0, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1);