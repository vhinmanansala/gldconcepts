// import external dependencies
import 'jquery';
import 'flexslider/jquery.flexslider-min.js';
import 'isotope-layout/dist/isotope.pkgd.min.js';
import 'packery/dist/packery.pkgd.min.js';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import singleProject from './routes/singleProject';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  singleProject,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
