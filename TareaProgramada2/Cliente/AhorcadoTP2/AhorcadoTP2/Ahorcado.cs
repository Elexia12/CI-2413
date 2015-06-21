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
    public partial class Ahorcado : Form
    {

        private AhorcadoTP2.AhorcadoReference.Juego_AhorcadoPortClient ws; 

        public Ahorcado()
        {
            InitializeComponent();
            ws = new AhorcadoReference.Juego_AhorcadoPortClient();
            palabraOculta.Paste(ws.getPalabraOculta());
        }

        private void button1_Click(object sender, EventArgs e)
        {

        }
    }
}
