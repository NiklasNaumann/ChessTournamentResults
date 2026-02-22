CREATE TABLE tx_chesstournamentresults_domain_model_tournament (
  title varchar(255) NOT NULL DEFAULT '',
  location varchar(255) NOT NULL DEFAULT '',
  start_date int(11) unsigned DEFAULT '0' NOT NULL,
  end_date int(11) unsigned DEFAULT '0' NOT NULL,
  description text,
  players int(11) unsigned DEFAULT '0' NOT NULL,
  rounds int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_chesstournamentresults_domain_model_player (
  tournament int(11) unsigned DEFAULT '0' NOT NULL,
  name varchar(255) NOT NULL DEFAULT '',
  starting_rank int(11) unsigned DEFAULT '0' NOT NULL,
  rating int(11) unsigned DEFAULT '0' NOT NULL,
  club varchar(255) NOT NULL DEFAULT ''
);

CREATE TABLE tx_chesstournamentresults_domain_model_round (
  tournament int(11) unsigned DEFAULT '0' NOT NULL,
  round_number int(11) unsigned DEFAULT '0' NOT NULL,
  name varchar(255) NOT NULL DEFAULT '',
  source_reference varchar(255) NOT NULL DEFAULT '',
  pairings int(11) unsigned DEFAULT '0' NOT NULL,
  standings int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_chesstournamentresults_domain_model_pairing (
  round int(11) unsigned DEFAULT '0' NOT NULL,
  board int(11) unsigned DEFAULT '0' NOT NULL,
  white_player varchar(255) NOT NULL DEFAULT '',
  black_player varchar(255) NOT NULL DEFAULT '',
  result varchar(50) NOT NULL DEFAULT ''
);

CREATE TABLE tx_chesstournamentresults_domain_model_standing (
  round int(11) unsigned DEFAULT '0' NOT NULL,
  position int(11) unsigned DEFAULT '0' NOT NULL,
  player_name varchar(255) NOT NULL DEFAULT '',
  points decimal(5,2) NOT NULL DEFAULT '0.00',
  buchholz decimal(6,2) NOT NULL DEFAULT '0.00'
);
