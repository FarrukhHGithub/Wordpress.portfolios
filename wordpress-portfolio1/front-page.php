<?php
/**
 * The front page template — the one-page portfolio landing page.
 *
 * Edit the $stack and $projects arrays below to update the content
 * without touching the markup.
 */

get_header();

$stack = array(
	array( 'name' => 'MongoDB',              'color' => '#4FA37A' ),
	array( 'name' => 'Express',               'color' => '#8A97A6' ),
	array( 'name' => 'React',                 'color' => '#61DAFB' ),
	array( 'name' => 'Node.js',               'color' => '#4FA37A' ),
	array( 'name' => 'Redux / Zustand',       'color' => '#F2B94D' ),
	array( 'name' => 'REST & GraphQL APIs',   'color' => '#8A97A6' ),
	array( 'name' => 'Tailwind CSS',          'color' => '#61DAFB' ),
	array( 'name' => 'Docker',                'color' => '#F2B94D' ),
	array( 'name' => 'AWS / Vercel',          'color' => '#8A97A6' ),
);

$projects = array(
	array(
		'index'       => '01',
		'title'       => 'Fieldnote — inventory tracker for small warehouses',
		'description' => 'A MERN app that replaced a shared spreadsheet for a 12-person warehouse team: barcode lookups, low-stock alerts, and a live dashboard built on Socket.io for real-time updates.',
		'tags'        => array( 'MongoDB', 'Express', 'React', 'Socket.io' ),
	),
	array(
		'index'       => '02',
		'title'       => 'Payhive — invoicing for freelancers',
		'description' => 'Lets freelancers create branded invoices, track payment status, and send automatic reminders. Handles Stripe payments and PDF generation server-side with Node.',
		'tags'        => array( 'Node.js', 'React', 'Stripe API', 'JWT auth' ),
	),
	array(
		'index'       => '03',
		'title'       => 'Trailmark — hiking route planner',
		'description' => 'A community app for sharing hiking routes in Gilgit-Baltistan, with offline map caching and a moderation queue for user-submitted trails.',
		'tags'        => array( 'MongoDB Atlas', 'Express', 'React Native' ),
	),
);
?>

<main>

	<section class="hero wrap">
		<div class="hero-grid">
			<div>
				<p class="eyebrow mono">Full-stack web developer</p>
				<h1>I build web apps end to end, from database to browser.</h1>
				<p class="lede">Amir Khan — I design and ship products on MongoDB, Express, React and Node. Four years of turning ideas into fast, reliable software for startups and small teams.</p>
				<div class="cta-row">
					<a href="#work" class="btn btn-primary">See my work</a>
					<a href="#contact" class="btn btn-ghost">Start a project</a>
				</div>
			</div>

			<div class="terminal">
				<div class="terminal-bar">
					<span class="dot"></span><span class="dot"></span><span class="dot"></span>
				</div>
				<div class="terminal-body">
					<div class="l">// developer.js</div>
					<div><span class="k">const</span> developer = {</div>
					<div>&nbsp;&nbsp;name: <span class="s">'Amir Khan'</span>,</div>
					<div>&nbsp;&nbsp;stack: [<span class="s">'MongoDB'</span>, <span class="s">'Express'</span>, <span class="s">'React'</span>, <span class="s">'Node'</span>],</div>
					<div>&nbsp;&nbsp;experience: <span class="c">4</span>,</div>
					<div>&nbsp;&nbsp;basedIn: <span class="s">'Gilgit-Baltistan'</span>,</div>
					<div>&nbsp;&nbsp;available: <span class="c">true</span></div>
					<div>};<span class="cursor"></span></div>
				</div>
			</div>
		</div>
	</section>

	<section id="about" class="wrap section">
		<h2>About</h2>
		<p class="section-sub">A short version of how I work and what I care about.</p>
		<div class="about-grid">
			<p><strong>I work across the whole stack</strong> — from schema design in MongoDB to building the API layer in Express and Node, through to the interface in React. That means fewer handoffs and fewer things lost in translation between front end and back end.</p>
			<p><strong>I care about the boring parts too:</strong> clean error handling, sensible loading states, and code that the next developer can actually read. Good software is mostly about the parts nobody notices when they work.</p>
		</div>
	</section>

	<section id="stack" class="wrap section">
		<h2>Stack</h2>
		<p class="section-sub">The tools I reach for most, plus a few extras I use around them.</p>
		<div class="stack-row">
			<?php foreach ( $stack as $tool ) : ?>
				<div class="stack-pill">
					<i style="background:<?php echo esc_attr( $tool['color'] ); ?>"></i>
					<?php echo esc_html( $tool['name'] ); ?>
				</div>
			<?php endforeach; ?>
		</div>
	</section>

	<section id="work" class="wrap section">
		<h2>Selected work</h2>
		<p class="section-sub">A few projects that show how I think about product and code.</p>

		<?php foreach ( $projects as $project ) : ?>
			<div class="project">
				<div class="project-index mono"><?php echo esc_html( $project['index'] ); ?></div>
				<div>
					<h3><?php echo esc_html( $project['title'] ); ?></h3>
					<p><?php echo esc_html( $project['description'] ); ?></p>
					<div class="tags">
						<?php foreach ( $project['tags'] as $tag ) : ?>
							<span class="tag"><?php echo esc_html( $tag ); ?></span>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</section>

	<section id="contact" class="wrap section">
		<div class="contact-box">
			<div>
				<h2>Have a project in mind?</h2>
				<p>Tell me what you're building — I usually reply within a day.</p>
			</div>
			<a href="mailto:amir.dev@example.com" class="btn btn-primary">amir.dev@example.com</a>
		</div>
	</section>

</main>

<?php get_footer(); ?>
