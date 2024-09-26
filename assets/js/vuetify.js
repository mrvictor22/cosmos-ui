import { createVuetify } from 'vuetify';
import 'vuetify/styles';
import { mdi } from 'vuetify/iconsets/mdi';
import * as components from 'vuetify/components'
import * as directives from 'vuetify/directives'

export default createVuetify({
  icons: {
    defaultSet: 'mdi',
  },
  components,
  directives
});
