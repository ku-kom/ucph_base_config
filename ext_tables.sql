#
# Add SQL definition of database tables
#
--
-- Table structure for table 'pages'
--
CREATE TABLE pages (
   # Table for UCPH faculty definition on site root:
   ucph_color_theme varchar(255) DEFAULT '' NOT NULL,
);

--
-- Table structure for table 'tt_content'
--
CREATE TABLE tt_content (
   full_site_width VARCHAR(255) DEFAULT '' NOT NULL
);