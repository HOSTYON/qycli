![Logo Banner](https://raw.githubusercontent.com/HOSTYON/qycli-assets/master/qycli-banner-animated-optim.svg)

# qycli

## Host more quickly with qycli

Qycli is an advanced, secure and very performant LEMP stack for WordPress and other apps.

Features include:

- All apps compiled from original source code and optimized for performance and security through [unypkg](https://github.com/unypkg)
- Optimized to run in a VM or Linux System Container (LXC)
- Cloudflare only
    - Added security + speed
    - Making IPv6 only hosts compatible to IPv4
    - No worrying Let's Encrypt certificates might not renew properly after 90 days
- Lightweight and no dependencies: 100% BASH

### Installation:

_This project can be used, but is subject to big changes. So use at your own risk._

You need a Cloudflare account token that can create other tokens
(Note: qyc.li redirects to [raw.githubusercontent.com/HOSTYON/qycli/refs/heads/](https://raw.githubusercontent.com/HOSTYON/qycli/refs/heads/))

```bash
# Installation
wget -qO- qyc.li/i/dev | bash -s cft YOURTOKENHERE

# Which is identical to running:
wget -qO- raw.githubusercontent.com/HOSTYON/qycli/refs/heads/dev/ins/dev | \
    bash -s cft YOURTOKENHERE
```
