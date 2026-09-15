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
    <div>
      <div class="kicker">AndroidDeveloper : Engineer</div>
      <h1>Six years building native Android apps that hold up at scale.</h1>
      <p class="lede">I write Kotlin, design with Jetpack Compose, and care about the parts of an Android app most teams find out about too late &mdash; process death, background limits, and the fragmentation across a thousand device configurations.</p>
      <div class="hero-ctas">
        <a class="btn btn-primary" href="#work">See the work</a>
        <a class="btn btn-ghost" href="#contact">Get in touch</a>
      </div>
      <div class="stat-row">
        <div class="stat"><b>6 yrs</b><span>Native Android</span></div>
        <div class="stat"><b>11</b><span>Apps in the Play Store</span></div>
        <div class="stat"><b>4.7&#9733;</b><span>Avg. store rating</span></div>
      </div>
    </div>
    <div class="view-tree">
      <div class="node"><b><span class="swatch" style="background:var(--violet);"></span>ComposeView</b>root &middot; fills device</div>
      <div class="node indent"><b><span class="swatch" style="background:var(--green);"></span>Scaffold</b>topBar, content, fab</div>
      <div class="node indent2"><b>LazyColumn</b>142 items &middot; recycled</div>
      <div class="node indent2"><b>FloatingActionButton</b>onClick &rarr; Sync()</div>
    </div>
  </div>
</section>

<section id="about">
  <div class="wrap">
    <div class="section-head">
      <div>
        <div class="kicker">About</div>
        <h2>Six years, one platform</h2>
      </div>
      <p>What sticking with native Android instead of going cross-platform has taught me.</p>
    </div>
    <div class="about-grid">
      <div>
        <p>I've spent six years going deep on one platform instead of wide across several. That means knowing Android's lifecycle well enough to stop fighting it &mdash; why a fragment is still alive after its view is destroyed, why WorkManager silently rescheduled your job, why a customer's specific device drops frames nobody else sees.</p>
        <p>Most of my recent work has been migrating older View-based codebases to Jetpack Compose without a rewrite &mdash; module by module, screen by screen, while the app keeps shipping. I've also spent real time on the boring-but-critical stuff: baseline profiles, R8 rules that don't break at runtime, and CI that catches regressions before a customer does.</p>
        <p>I'm comfortable owning a feature from architecture through Play Store rollout, and just as comfortable pairing with a designer to work out what Compose can and can't do cheaply.</p>
      </div>
      <div class="skills-grid">
        <div class="skill-item"><b>Kotlin</b><span>Coroutines, Flow, multiplatform basics</span></div>
        <div class="skill-item"><b>Jetpack Compose</b><span>State, animation, custom layouts</span></div>
        <div class="skill-item"><b>Architecture</b><span>MVVM, Clean Architecture, modularization</span></div>
        <div class="skill-item"><b>Jetpack</b><span>Room, WorkManager, Navigation, DataStore</span></div>
        <div class="skill-item"><b>Dependency injection</b><span>Hilt, Dagger</span></div>
        <div class="skill-item"><b>Testing</b><span>JUnit, Espresso, Turbine</span></div>
        <div class="skill-item"><b>Performance</b><span>Baseline profiles, macrobenchmark, R8</span></div>
        <div class="skill-item"><b>Release</b><span>Play Console, staged rollouts, Firebase</span></div>
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
      <p>Six years across two product teams and an earlier agency stretch.</p>
    </div>
    <div class="timeline">
      <div class="tl-item">
        <div class="years">2023 &mdash; Present</div>
        <div>
          <h3>Senior Android Engineer</h3>
          <div class="role-meta">Harborline &middot; Full-time</div>
          <p>Leading the Compose migration for a logistics app used by 200K+ drivers. Cut cold-start time by 41% with baseline profiles and rebuilt the offline sync layer on Room and WorkManager.</p>
        </div>
      </div>
      <div class="tl-item">
        <div class="years">2020 &mdash; 2023</div>
        <div>
          <h3>Android Developer</h3>
          <div class="role-meta">Fernway Health &middot; Full-time</div>
          <p>Owned the patient-facing Android app end to end &mdash; architecture, Play Store releases, and an accessibility pass that took the app from failing audits to WCAG AA compliant.</p>
        </div>
      </div>
      <div class="tl-item">
        <div class="years">2019 &mdash; 2020</div>
        <div>
          <h3>Junior Android Developer</h3>
          <div class="role-meta">Reedwell Studio &middot; Agency</div>
          <p>Built Android clients for six client apps across retail and media, working from Figma files straight through to Play Store submission on tight agency timelines.</p>
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
      <p>From a large-scale Compose migration to a solo Play Store launch.</p>
    </div>

    <div class="project">
      <div class="view-tree">
        <div class="node"><b><span class="swatch" style="background:var(--violet);"></span>RouteScreen</b>compose &middot; 3 states</div>
        <div class="node indent"><b>MapLayer</b>offline tiles &middot; cached</div>
        <div class="node indent"><b><span class="swatch" style="background:var(--green);"></span>SyncBanner</b>WorkManager status</div>
      </div>
      <div>
        <div class="project-tag">Logistics &middot; Compose migration</div>
        <h3>Harborline Driver</h3>
        <p>Migrated a 200K-user delivery app from Views to Jetpack Compose one module at a time with zero release freeze, and rebuilt its offline-first sync engine so drivers can complete routes with no signal.</p>
        <div class="tech-row"><span>Kotlin</span><span>Compose</span><span>Room</span><span>WorkManager</span></div>
      </div>
    </div>

    <div class="project reverse">
      <div class="view-tree">
        <div class="node"><b><span class="swatch" style="background:var(--green);"></span>VitalsCard</b>compose &middot; live updates</div>
        <div class="node indent"><b>AccessibilityNode</b>talkback verified</div>
        <div class="node indent"><b><span class="swatch" style="background:var(--violet);"></span>ReminderSheet</b>datastore-backed</div>
      </div>
      <div>
        <div class="project-tag">Healthcare &middot; Accessibility</div>
        <h3>Fernway Companion</h3>
        <p>Took the patient companion app's accessibility from failing audits to WCAG AA, rebuilding custom components with proper TalkBack support and restructuring focus order across the whole navigation graph.</p>
        <div class="tech-row"><span>Kotlin</span><span>Compose</span><span>DataStore</span><span>Espresso</span></div>
      </div>
    </div>

    <div class="project">
      <div class="view-tree">
        <div class="node"><b><span class="swatch" style="background:var(--violet);"></span>FeedScreen</b>lazy list &middot; paging 3</div>
        <div class="node indent"><b>CameraCapture</b>CameraX &middot; custom UI</div>
        <div class="node indent"><b><span class="swatch" style="background:var(--green);"></span>UploadWorker</b>background &middot; retry</div>
      </div>
      <div>
        <div class="project-tag">Consumer &middot; Solo build</div>
        <h3>Fieldlog</h3>
        <p>Built and shipped a field-inspection app solo, from architecture through Play Store rollout &mdash; camera capture with CameraX, paginated sync feed, and a background upload queue that survives process death.</p>
        <div class="tech-row"><span>Kotlin</span><span>CameraX</span><span>Paging 3</span><span>Hilt</span></div>
      </div>
    </div>

  </div>
</section>

<section class="contact" id="contact" style="border-bottom:none;">
  <div class="wrap contact-inner">
    <div>
      <div class="kicker">Contact</div>
      <h2>Have an Android app that needs building?</h2>
    </div>
    <div class="contact-links">
      <a href="mailto:hello@priyanair.dev">hello@priyanair.dev</a>
      <a href="#">github.com/priyanair</a>
      <a href="#">linkedin.com/in/priyanair</a>
    </div>
  </div>
</section>
