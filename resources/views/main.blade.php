    /* Buttons */
/* Inputs */
/* Timeline custom component */
.timeline {
  border-left: 2px solid #E6E9ED;
  padding: 1rem 0; }

.timeline-card {
  position: relative;
  margin-left: 31px;
  border-left: 2px solid;
  margin-bottom: 2rem; }

.timeline-card:last-child {
  margin-bottom: 1rem; }

.timeline-card:before {
  content: '';
  display: inline-block;
  position: absolute;
  background-color: #fff;
  border-radius: 10px;
  width: 12px;
  height: 12px;
  top: 20px;
  left: -41px;
  border: 2px solid;
  z-index: 2; }

.timeline-card:after {
  content: '';
  display: inline-block;
  position: absolute;
  background-color: currentColor;
  width: 29px;
  height: 2px;
  top: 25px;
  left: -29px;
  z-index: 1; }

.timeline-card-primary {
  border-left-color: #4A89DC; }

.timeline-card-primary:before {
  border-color: #4A89DC; }

.timeline-card-primary:after {
  background-color: #4A89DC; }

.timeline-card-success {
  border-left-color: #37BC9B; }

.timeline-card-success:before {
  border-color: #37BC9B; }

.timeline-card-success:after {
  background-color: #37BC9B; }

html {
  scroll-behavior: smooth; }

.site-title {
  font-size: 1.25rem;
  line-height: 2.5rem; }

.nav-link {
  padding: 0;
  font-size: 1.25rem;
  line-height: 2.5rem;
  color: rgba(0, 0, 0, 0.5); }

.nav-link:hover,
.nav-link:focus,
.active .nav-link {
  color: rgba(0, 0, 0, 0.8); }

.nav-item + .nav-item {
  margin-left: 1rem; }

.cover {
  border-radius: 10px; }

.cover-bg {
  background-color: #4A89DC;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.12'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-9-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9z'/%3E%3Cpath d='M6 5V0H5v5H0v1h5v94h1V6h94V5H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  border-radius: 10px 10px 0 0; }

.avatar {
  max-width: 216px;
  max-height: 216px;
  margin-top: 20px;
  text-align: center;
  margin-left: auto;
  margin-right: auto; }

.avatar img {
  /* Safari 6.0 - 9.0 */
  filter: grayscale(100%); }

footer a:not(.nav-link) {
  color: inherit;
  border-bottom: 1px dashed;
  text-decoration: none;
  cursor: pointer; }

@media (min-width: 48em) {
  .site-title {
    float: left; }
  .site-nav {
    float: right; }
  .avatar {
    margin-bottom: -80px;
    margin-left: 0; } }

@media print {
  body {
    background-color: #fff; }
  .container {
    width: auto;
    max-width: 100%;
    padding: 0; }
  .cover, .cover-bg {
    border-radius: 0; }
  .cover.shadow-lg {
    box-shadow: none !important; }
  .cover-bg {
    padding: 5rem !important;
    padding-bottom: 10px !important; }
  .avatar {
    margin-top: -10px; }
  .about-section {
    padding: 6.5rem 5rem 2rem !important; }
  .skills-section,
  .work-experience-section,
  .education-section,
  .contant-section {
    padding: 1.5rem 5rem 2rem !important; }
  .page-break {
    padding-top: 5rem;
    page-break-before: always; } }

