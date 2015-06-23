using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace AhorcadoTP2
{
    public partial class PantallaPuntajes : Form
    {
        public PantallaPuntajes()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            puntajesBox.Clear();
            this.Hide();
        }

        public System.Windows.Forms.TextBox getPuntajesBox()
        {
            return this.puntajesBox;
        }
    }
}
