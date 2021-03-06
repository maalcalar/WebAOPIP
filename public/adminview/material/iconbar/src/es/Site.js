import $ from 'jquery'
import * as Config from 'Config'
import Base from 'Base'
import Menubar from 'Menubar'
import Sidebar from 'Sidebar'
import PageAside from 'PageAside'

const DOC = document
const $DOC = $(document)
const $BODY = $('body')

class Site extends Base {
  initialize() {
    this.startLoading()
    this.initializePluginAPIs()
    this.initializePlugins()

    this.initComponents()
    this.setDefaultState()
  }

  process() {
    this.polyfillIEWidth()
    this.initBootstrap()

    this.setupMenubar()
    this.setupFullScreen()
    this.setupMegaNavbar()
    this.setupWave()
    this.setupTour()
    this.setupNavbarCollpase()
    // Dropdown menu setup
    // ===================
    this.$el.on('click', '.dropdown-menu-media', (e) => {
      e.stopPropagation()
    })
  }

  _getDefaultMeunbarType() {
    const breakpoint = this.getCurrentBreakpoint()


    let type = 'open'

    if ($BODY.hasClass('site-menubar-keep') && $BODY.is('.site-menubar-keep')) {
      type = 'hide'
    }

    if (breakpoint === 'xs') {
      type = 'hide'
    }
    return type
  }

  menubarType(type) {
    const self = this


    const toggle = function ($el) {
      $el.toggleClass('hided', !(type === 'open'))
      $el.toggleClass('unfolded', !(type === 'fold'))
    }

    $('[data-toggle="menubar"]').each(function () {
      const $this = $(this)
      const $hamburger = $(this).find('.hamburger')

      if ($hamburger.length > 0) {
        toggle($hamburger)
      } else {
        toggle($this)
      }
    })
  }

  initComponents() {
    this.menubar = new Menubar({
      $el: $('.site-menubar')
    })
    this.sidebar = new Sidebar()
    const $aside = $('.page-aside')
    if ($aside.length > 0) {
      this.aside = new PageAside({
        $el: $aside
      })

      this.aside.run()
    }

    this.menubar.run()
    this.sidebar.run()
  }

  setDefaultState() {
    this.menubar.change(this._getDefaultMeunbarType())
  }

  getCurrentBreakpoint() {
    const bp = Breakpoints.current()
    return bp ? bp.name : 'lg'
  }

  initBootstrap() {
    // Tooltip setup
    // =============
    $DOC.tooltip({
      selector: '[data-tooltip=true]',
      container: 'body'
    })

    $('[data-toggle="tooltip"]').tooltip()
    $('[data-toggle="popover"]').popover()
  }

  polyfillIEWidth() {
    if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
      const msViewportStyle = DOC.createElement('style')
      msViewportStyle.appendChild(
        DOC.createTextNode(
          '@-ms-viewport{width:auto!important}'
        )
      )
      DOC.querySelector('head').appendChild(msViewportStyle)
    }
  }

  setupFullScreen() {
    if (typeof screenfull !== 'undefined') {
      $DOC.on('click', '[data-toggle="fullscreen"]', () => {
        if (screenfull.enabled) {
          screenfull.toggle()
        }

        return false
      })

      if (screenfull.enabled) {
        DOC.addEventListener(screenfull.raw.fullscreenchange, () => {
          $('[data-toggle="fullscreen"]').toggleClass('active', screenfull.isFullscreen)
        })
      }
    }
  }

  setupMegaNavbar() {
    $DOC.on('click', '.navbar-mega .dropdown-menu', (e) => {
      e.stopPropagation()
    }).on('show.bs.dropdown', (e) => {
      const $target = $(e.target)
      const $trigger = e.relatedTarget ? $(e.relatedTarget) : $target.children('[data-toggle="dropdown"]')
      const animation = $trigger.data('animation')

      if (animation) {
        const $menu = $target.children('.dropdown-menu')
        $menu
          .addClass(`animation-${animation}`)
          .one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', () => {
            $menu.removeClass(`animation-${animation}`)
          })
      }
    }).on('shown.bs.dropdown', (e) => {
      const $menu = $(e.target).find('.dropdown-menu-media > .list-group')

      if ($menu.length > 0) {
        const api = $menu.data('asScrollable')
        if (api) {
          api.update()
        } else {
          $menu.asScrollable({
            namespace: 'scrollable',
            contentSelector: '> [data-role=\'content\']',
            containerSelector: '> [data-role=\'container\']'
          })
        }
      }
    })
  }

  setupMenubar() {
    $(document).on('click', '[data-toggle="menubar"]', () => {
      let type = this.menubar.type

      switch (type) {
        case 'open':
          type = 'hide'
          break
        case 'hide':
          type = 'open'
          break
          // no default
      }

      this.menubar.change(type)
      this.menubarType(type)
      return false
    })

    Breakpoints.on('change', () => {
      this.menubar.type = this._getDefaultMeunbarType()
      this.menubar.change(this.menubar.type)
    })
  }


  startLoading() {
    if (typeof $.fn.animsition === 'undefined') {
      return false
    }

    // let loadingType = 'default';
    $BODY.animsition({
      inClass: 'fade-in',
      inDuration: 800,
      loading: true,
      loadingClass: 'loader-overlay',
      loadingParentElement: 'html',
      loadingInner: `
      <div class="loader-content">
        <div class="loader-index">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>`,
      onLoadEvent: true
    })
  }
  setupNavbarCollpase() {
    $(document).on('click', '[data-target=\'#site-navbar-collapse\']', function (e) {
      const $trigger = $(this)
      const isClose = $trigger.hasClass('collapsed')
      $BODY.addClass('site-navbar-collapsing')
      $BODY.toggleClass('site-navbar-collapse-show', !isClose)
      setTimeout(() => {
        $BODY.removeClass('site-navbar-collapsing')
      }, 350)
    })
  }
  setupTour(flag) {
    if (typeof this.tour === 'undefined') {
      if (typeof introJs === 'undefined') {
        return
      }
      const overflow = $('body').css('overflow')


      const self = this


      const tourOptions = Config.get('tour')

      this.tour = introJs()

      this.tour.onbeforechange(() => {
        $('body').css('overflow', 'hidden')
      })

      this.tour.oncomplete(() => {
        $('body').css('overflow', overflow)
      })

      this.tour.onexit(() => {
        $('body').css('overflow', overflow)
      })

      this.tour.setOptions(tourOptions)
      $('.site-tour-trigger').on('click', () => {
        self.tour.start()
      })
    }
    // if (window.localStorage && window.localStorage.getItem('startTour') && (flag !== true)) {
    //   return;
    // } else {
    //   this.tour.start();
    //   window.localStorage.setItem('startTour', true);
    // }
  }

  setupWave() {
    if (typeof Waves !== 'undefined') {
      Waves.init()
      Waves.attach('.site-menu-item > a', ['waves-classic'])
      Waves.attach('.site-navbar .navbar-toolbar a', ['waves-light', 'waves-round'])
      Waves.attach('.btn', ['waves-classic'])
    }
  }
}

let instance = null

function getInstance() {
  if (!instance) {
    instance = new Site()
  }
  return instance
}

function run() {
  const site = getInstance()
  site.run()
}

export default Site
export {
  Site,
  run,
  getInstance
}
