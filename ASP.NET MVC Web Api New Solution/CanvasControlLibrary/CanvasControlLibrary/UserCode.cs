using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace CanvasControlLibrary
{
    public class UserCode
    {
        public void testFunc1(CanvasControlLibrary.Models.CanvasControlLibrary CCL)
        {
            CCL.ButtonPropsArray[0].Text = (string) CCL.Params[0] + (string) CCL.Params[1];
        }

        public void testFunc2(CanvasControlLibrary.Models.CanvasControlLibrary CCL)
        {
            CCL.LabelPropsArray[0].Text = (string) CCL.Params[0] + (string) CCL.Params[1];
        }

        public void ClickButton(CanvasControlLibrary.Models.CanvasControlLibrary CCL)
        {
            CCL.ReturnParams = CCL.Params;
        }
    }
}