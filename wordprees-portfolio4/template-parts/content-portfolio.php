<?php
/**
 * Portfolio page content.
 *
 * Everything below is static markup for a one-page portfolio.
 * Edit the text directly here, or wire these sections up to
 * Custom Fields (ACF) / the block editor later if you want to
 * edit content from the WP admin instead of this file.
 */
?>

<section class="hero">
  <div class="wrap">
    <div class="kicker"><span class="dot"></span>flutter build --release</div>
    <h1>One codebase, four platforms, four years of shipping it well.</h1>
    <p class="lede">I build Flutter apps that don't feel like Flutter apps &mdash; native scroll physics, platform-correct navigation, and performance that holds up on the cheapest Android device in the room, not just the demo phone.</p>
    <div class="hero-ctas">
      <a class="btn btn-primary" href="#work">See the work</a>
      <a class="btn btn-ghost" href="#contact">Get in touch</a>
    </div>
    <div class="stat-row">
      <div class="stat"><b>4 yrs</b><span>Flutter &amp; Dart</span></div>
      <div class="stat"><b>9</b><span>Apps shipped</span></div>
      <div class="stat"><b>4</b><span>Platforms per codebase</span></div>
    </div>
  </div>
</section>

<section id="about">
  <div class="wrap">
    <div class="section-head">
      <div>
        <div class="kicker">About</div>
        <h2>Why Flutter, still</h2>
      </div>
      <p>What four years of one framework across four platforms has taught me.</p>
    </div>
    <div class="about-grid">
      <div>
        <p>I picked up Flutter early, back when "write once, run anywhere" still came with an asterisk. Most of that asterisk is gone now, and most of my job is making sure it stays gone &mdash; catching the one screen where Cupertino and Material disagree, or the one widget rebuild that's quietly costing you a dropped frame.</p>
        <p>I've shipped the same codebase to iOS, Android, web, and desktop more than once, which means I think about state management and platform channels before they become a rewrite. Riverpod and BLoC are both in regular rotation depending on what the team already knows.</p>
        <p>I like the part of the job right before launch just as much as the first line of code: profiling with DevTools, trimming a bundle down, and making sure the release build actually matches what QA tested in debug mode.</p>
        <div class="platform-row">
          <span>iOS</span><span>Android</span><span>Web</span><span>Desktop (macOS / Windows)</span>
        </div>
      </div>
      <div class="skills-grid">
        <div class="skill-item"><b>Dart</b><span>Null safety, isolates, FFI basics</span></div>
        <div class="skill-item"><b>State management</b><span>Riverpod, BLoC, Provider</span></div>
        <div class="skill-item"><b>Navigation</b><span>go_router, nested navigators</span></div>
        <div class="skill-item"><b>Native interop</b><span>Platform channels, Pigeon</span></div>
        <div class="skill-item"><b>Backend</b><span>Firebase, Supabase, REST/GraphQL</span></div>
        <div class="skill-item"><b>Testing</b><span>Widget tests, integration_test, golden tests</span></div>
        <div class="skill-item"><b>Performance</b><span>DevTools profiling, impeller, tree-shaking</span></div>
        <div class="skill-item"><b>CI/CD</b><span>Codemagic, Fastlane, GitHub Actions</span></div>
      </div>
    </div>
  </div>
</section>

<section id="experience">
  <div class="wrap">
    <div class="section-head">
      <div>
        <div class="kicker">Experience</div>
        <h2>Where I've built</h2>
      </div>
      <p>Four years across a product team, a design-led studio, and a run of contract work.</p>
    </div>
    <div class="timeline">
      <div class="tl-item">
        <div class="years">2024 &mdash; Present</div>
        <div>
          <h3>Senior Flutter Engineer</h3>
          <div class="role-meta">Cascade Analytics &middot; Full-time</div>
          <p>Own the Flutter codebase shared across the iOS, Android, and web clients of a data-monitoring product. Led the migration to the Impeller renderer and cut janky frames on mid-range Android by 60%.</p>
        </div>
      </div>
      <div class="tl-item">
        <div class="years">2022 &mdash; 2024</div>
        <div>
          <h3>Flutter Developer</h3>
          <div class="role-meta">Warmlight Studio &middot; Full-time</div>
          <p>Built client apps end to end at a design-led studio, translating Figma prototypes into pixel-accurate, platform-aware Flutter UI across a dozen short-cycle projects.</p>
        </div>
      </div>
      <div class="tl-item">
        <div class="years">2021 &mdash; 2022</div>
        <div>
          <h3>Freelance Flutter Developer</h3>
          <div class="role-meta">Independent &middot; Contract</div>
          <p>Took three early-stage startups from a blank pubspec.yaml to a live App Store and Play Store listing, usually as the only engineer on the mobile side.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="work">
  <div class="wrap">
    <div class="section-head">
      <div>
        <div class="kicker">Selected work</div>
        <h2>A few builds</h2>
      </div>
      <p>From a multi-platform analytics app to a solo three-startup run.</p>
    </div>

    <div class="project">
      <div class="widget-tree">
        <div class="node"><b><span class="swatch" style="background:var(--sky);"></span>MaterialApp.router</b>go_router &middot; 4 targets</div>
        <div class="node indent"><b>DashboardScaffold</b>adaptive layout</div>
        <div class="node indent"><b><span class="swatch" style="background:var(--amber);"></span>LiveChart</b>CustomPainter &middot; 60fps</div>
      </div>
      <div>
        <div class="project-tag">Analytics &middot; Multi-platform</div>
        <h3>Cascade Monitor</h3>
        <p>Shared one Flutter codebase across iOS, Android, and web for a real-time monitoring dashboard, with an adaptive layout system that reflows from a phone screen to a desktop-width browser window without a second UI.</p>
        <div class="tech-row"><span>Flutter</span><span>Riverpod</span><span>go_router</span><span>Impeller</span></div>
      </div>
    </div>

    <div class="project reverse">
      <div class="widget-tree">
        <div class="node"><b><span class="swatch" style="background:var(--amber);"></span>CupertinoPageScaffold</b>iOS build target</div>
        <div class="node indent"><b>BookingFlow</b>bloc &middot; 5 steps</div>
        <div class="node indent"><b><span class="swatch" style="background:var(--sky);"></span>PlatformChannel</b>Apple Pay bridge</div>
      </div>
      <div>
        <div class="project-tag">Travel &middot; Client project</div>
        <h3>Warmlight Journeys</h3>
        <p>Built a booking app with genuinely platform-correct UI &mdash; Cupertino on iOS, Material on Android &mdash; and a native platform channel to bridge Apple Pay where Flutter's plugin ecosystem fell short.</p>
        <div class="tech-row"><span>Flutter</span><span>BLoC</span><span>Platform Channels</span><span>Firebase</span></div>
      </div>
    </div>

    <div class="project">
      <div class="widget-tree">
        <div class="node"><b><span class="swatch" style="background:var(--sky);"></span>ProviderScope</b>root &middot; 3 apps</div>
        <div class="node indent"><b>OnboardingFlow</b>shared package</div>
        <div class="node indent"><b><span class="swatch" style="background:var(--amber);"></span>SyncEngine</b>isolates &middot; background</div>
      </div>
      <div>
        <div class="project-tag">Startups &middot; Solo builds</div>
        <h3>Three launches, one engineer</h3>
        <p>Took three early-stage startups from an empty repo to a live store listing solo, reusing a shared internal package for onboarding and auth so each new app started a few weeks ahead.</p>
        <div class="tech-row"><span>Flutter</span><span>Riverpod</span><span>Isolates</span><span>Supabase</span></div>
      </div>
    </div>

  </div>
</section>

<section class="contact" id="contact" style="border-bottom:none;">
  <div class="wrap">
    <div class="kicker">Contact</div>
    <h2>Have an app that needs to run everywhere?</h2>
    <div class="contact-links">
      <a href="mailto:hello@samokafor.dev">hello@samokafor.dev</a>
      <a href="#">github.com/samokafor</a>
      <a href="#">linkedin.com/in/samokafor</a>
    </div>
  </div>
</section>
